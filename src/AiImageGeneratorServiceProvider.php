<?php

namespace Rbb\AiImageGenerator;

use Illuminate\Support\ServiceProvider;

class AiImageGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('ai-image-generator', function () {
            return new Services\AIImageGenerator();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/aiimagegenerator.php' => config_path('aiimagegenerator.php'),
        ], 'config');
    }
}
