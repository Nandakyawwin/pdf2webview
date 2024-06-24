<?php

use Illuminate\Support\Facades\Route;
use Nandakyawwinn\Pdf2webview\Http\Controllers\PdfController;

Route::get('pdf/upload', function () {
    return view('pdf2webview::upload');
});

Route::post('pdf/upload', [PdfController::class, 'upload']);
