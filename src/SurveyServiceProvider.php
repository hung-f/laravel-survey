<?php

namespace Vam\Survey;

use Illuminate\Support\ServiceProvider;

class SurveyServiceProvider extends ServiceProvider
{
    
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'survey');
        
        /*
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/surveys'),
            __DIR__.'/../config/survey.php' => config_path('survey.php')
        ]);
        */
    }

    public function register()
    {
        $this->app->bind('survey', function(){
            return new Survey();
        });
    }
}
