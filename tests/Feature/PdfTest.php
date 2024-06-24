<?php

namespace Nandakyawwinn\Pdf2webview\Tests\Feature;

use Tests\TestCase;

class PdfTest extends TestCase
{
    /** @test */
    public function it_uploads_and_converts_pdf_to_html()
    {
        $response = $this->post('/pdf/upload', [
            'pdf' => new \Illuminate\Http\UploadedFile(
                storage_path('test.pdf'),
                'test.pdf',
                null,
                null,
                true
            )
        ]);

        $response->assertStatus(200);
        $response->assertSee('<html>');
    }
}
