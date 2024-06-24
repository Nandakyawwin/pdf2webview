<?php

namespace Nandakyawwinn\Pdf2webview\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nandakyawwinn\Pdf2webview\PdfConverter;

class PdfController extends Controller
{
    protected $pdfConverter;

    public function __construct(PdfConverter $pdfConverter)
    {
        $this->pdfConverter = $pdfConverter;
    }

    public function upload(Request $request)
    {
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:10000',
        ]);

        $pdf = $request->file('pdf');
        $path = $pdf->storeAs('pdfs', $pdf->getClientOriginalName());

        $html = $this->pdfConverter->convert(storage_path('app/' . $path));

        return view('pdf2webview::pdf', compact('html'));
    }
}
