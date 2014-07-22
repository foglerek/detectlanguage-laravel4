<?php namespace Foglerek\DetectlanguageLaravel4;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Monolog\Logger;
use Config;
use DetectLanguage\DetectLanguage as DetectLanguageAPI;

class DetectLanguageServiceProvider extends ServiceProvider {

    /**
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = false;
    
    /**
    * Bootstrap the application events.
    *
    * @return void
    */
    public function boot()
    {
        $this->package('foglerek/detectlanguage-laravel4');
    }
    
    /**
    * Register the service provider.
    *
    * @return void
    */
    public function register()
    {
        $this->app->booting(function()
        {
            $loader = AliasLoader::getInstance();
            $loader->alias('DetectLanguage', 'Foglerek\DetectLanguageLaravel4\Facades\DetectLanguage');
        });
        
        $this->app->singleton('detectlanguage', function()
        {
            DetectLanguageAPI::setApiKey(
                Config::get('detectlanguage-laravel4::api_key')
            );
            return new DetectLanguageAPI;
        });
    }
    
    /**
    * Get the services provided by the provider.
    *
    * @return array
    */
    public function provides()
    {
        return array('detectlanguage');
    }

}