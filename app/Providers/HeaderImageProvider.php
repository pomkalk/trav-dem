<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\HeaderImage\HeaderImage;

class HeaderImageProvider extends ServiceProvider
{

    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(HeaderImage::class, function($app){
            return new HeaderImage();
        });
    }

    public function provides(){
        return [HeaderImage::class];
    }
}
