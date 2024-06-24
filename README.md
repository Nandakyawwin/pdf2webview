# pdf2webview Laravel Package

## Overview

The pdf2webview Laravel package provides functionality to upload PDF files, convert them to HTML, and display the HTML content with styling.

## Requirements

- PHP >= 7.2
- Laravel Framework >= 6.0
- Tecnickcom TCPDF >= 6.3

## Installation

1. Install the package via Composer:

    ```sh
    composer require nandakyawwinn/pdf2webview
    ```

2. Publish the package assets:

    ```sh
    php artisan vendor:publish --provider="Nandakyawwinn\Pdf2webview\Pdf2webviewServiceProvider"
    ```

3. Configure the package settings in `config/pdf2webview.php` if necessary.

## Usage

1. **Upload PDF Files:**
   - Access the PDF upload form at `http://your-app-url/pdf/upload`.
   - Select a PDF file and click "Upload PDF".

2. **Convert PDF to HTML:**
   - Upon upload, the package automatically converts the PDF to HTML using TCPDF.

3. **Display HTML Content:**
   - The HTML content is displayed with styles in the `pdf2webview::pdf` Blade view.

## Configuration

You can customize the package behavior by modifying the settings in `config/pdf2webview.php`.

## Support and Issues

For any issues or feature requests, please [open an issue](https://github.com/Nandakyawwin/pdf2webview/issues) on GitHub.

## License

This package is open-source software licensed under the [MIT License](LICENSE).
