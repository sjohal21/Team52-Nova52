<?php

namespace App\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if(env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }

        $source = public_path('images/products');
        $destination = storage_path('app/public/products');

        if (!File::exists($destination)) {
            File::makeDirectory($destination, 0755, true);
        }

        File::copyDirectory($source, $destination);
    }
}
