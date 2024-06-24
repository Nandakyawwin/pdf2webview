<?php

namespace Nandakyawwinn\Pdf2webview;

use TCPDF;

class PdfConverter
{
    public function convert($pdfPath)
    {
        // Load the PDF file
        $pdf = new TCPDF();
        $pageCount = $pdf->setSourceFile($pdfPath);
        
        $html = '';
        for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
            $tplIdx = $pdf->importPage($pageNo);
            $pdf->useTemplate($tplIdx);
            $html .= $pdf->Output('', 'S');
        }

        return $html;
    }
}
