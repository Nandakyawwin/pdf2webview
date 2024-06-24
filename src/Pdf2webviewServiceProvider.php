<?php

namespace Nandakyawwinn\Pdf2webview;

use Illuminate\Support\ServiceProvider;

class Pdf2webviewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('pdfconverter', function($app) {
            return new PdfConverter();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'pdf2webview');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/pdf2webview'),
        ], 'views');

        $this->publishes([
            __DIR__.'/config/pdf2webview.php' => config_path('pdf2webview.php'),
        ]);

        $this->mergeConfigFrom(
            __DIR__.'/config/pdf2webview.php', 'pdf2webview'
        );

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}
