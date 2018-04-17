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
        $template = strtolower($template);

        $options = new Options();

        $options->set('isRemoteEnabled', true);

        $pdf = new Dompdf($options);

        $context = stream_context_create([
            'ssl' => [
                'verify_peer'      => false,
                'verify_peer_name' => false,
                'allow_self_signed'=> true,
            ],
        ]);

        $pdf->setHttpContext($context);

        $pdf->loadHtml(View::make('invoices::'.$template, ['invoice' => $invoice]));
        $pdf->render();

        return $pdf;
    }
}
