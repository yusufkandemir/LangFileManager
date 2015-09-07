<?php namespace Dick\TranslationManager;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Dick\TranslationManager\Services\LangFiles;

class TranslationManagerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // use this if your package has views
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'translationmanager');

        // use this if your package needs a config file
        // $this->publishes([
        //         __DIR__.'/config/config.php' => config_path('translationmanager.php'),
        // ]);

        // use the vendor configuration file as fallback
        // $this->mergeConfigFrom(
        //     __DIR__.'/config/config.php', 'translationmanager'
        // );
    }
    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Dick\TranslationManager\Http\Controllers'], function($router)
        {
            require __DIR__.'/Http/routes.php';
        });
    }
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerTranslationManager();
        $this->setupRoutes($this->app->router);

        $this->app->singleton('langfile', function($app){ return new LangFiles($app['config']['app']['locale']); });

        // use this if your package has a config file
        // config([
        //         'config/translationmanager.php',
        // ]);
    }
    private function registerTranslationManager()
    {
        $this->app->bind('translationmanager',function($app){
            return new TranslationManager($app);
        });
    }
}