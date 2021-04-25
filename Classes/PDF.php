<?php
/**
 * This file is part of consoletvs/invoices.
 *
 * (c) Erik Campobadal <soc@erik.cat>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ConsoleTVs\Invoices\Classes;

use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;

/**
 * This is the PDF class.
 *
 * @author Erik Campobadal <soc@erik.cat>
 */
class PDF
{
    /**
     * Generate the PDF.
     *
     * @method generate
     *
     * @param ConsoleTVs\Invoices\Classes\Invoice $invoice
     * @param string                              $template
     *
     * @return Dompdf\Dompdf
     */
    public static function generate(Invoice $invoice, $template = 'default')
    {
        $customHtmlTemplate = false;
        if(self::containsHtml($template)) {
            $customHtmlTemplate = true;
            $filename = str_replace('.','',uniqid('blade_',true));
            $path = storage_path("framework/views/tmp");
            View::addLocation($path);
            $filepath = $path . DIRECTORY_SEPARATOR . "$filename.blade.php";
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            file_put_contents($filepath, trim($template));
            $template = $filename;
        } else {
            $template = 'invoices::'.strtolower($template);
        }

        $options = new Options();

        $options->set('isRemoteEnabled', true);
        $options->set('isPhpEnabled', true);

        $pdf = new Dompdf($options);

        $context = stream_context_create([
            'ssl' => [
                'verify_peer'      => false,
                'verify_peer_name' => false,
                'allow_self_signed'=> true,
            ],
        ]);

        $pdf->setHttpContext($context);

        $GLOBALS['with_pagination'] = $invoice->with_pagination;

        $pdf->loadHtml(View::make($template, ['invoice' => $invoice]));
        $pdf->render();

        if($customHtmlTemplate){
            unlink($filepath);
        }

        return $pdf;
    }

    protected static function containsHtml($string)
    {
        return preg_match("/<[^<]+>/",$string,$m) !== 0;
    }
}
