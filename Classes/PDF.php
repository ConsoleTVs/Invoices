<?php

namespace ConsoleTVs\Invoices\Classes;

use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;

class PDF
{
    /**
     * Generate the PDF
     *
     * @method generate
     * @param  ConsoleTVs\Invoices\Classes\Invoice   $invoice
     * @return Dompdf\Dompdf
     */
    public static function generate(Invoice $invoice, $template = 'default')
    {
        $template = strtolower($template);

        $options = new Options();

        $options->set('isRemoteEnabled', TRUE);

        $pdf = new Dompdf($options);

        $context = stream_context_create([
        	'ssl' => [
        		'verify_peer' => FALSE,
        		'verify_peer_name' => FALSE,
        		'allow_self_signed'=> TRUE
        	],
        ]);

        $pdf->setHttpContext($context);

        $pdf->loadHtml(View::make('invoices::default', ['invoice' => $invoice]));
        $pdf->render();

        return $pdf;
    }
}
