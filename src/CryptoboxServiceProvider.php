<?php
namespace Tuyenlaptrinh\Cryptobox;
use Illuminate\Support\ServiceProvider;

class CryptoboxServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/cryptobox.php' => config_path('cryptobox.php')
        ], 'config');
    }
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/cryptobox.php', 'cryptobox'
        );
        $this->app->bind('cryptobox', function($app)
        {
            return new Cryptobox(
                $app['Illuminate\Config\Repository']
            );
        });
    }
}
