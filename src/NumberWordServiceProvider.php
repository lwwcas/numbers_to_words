<?php
namespace Lwwcas\NumbersToWords;

use Illuminate\Support\ServiceProvider;

class NumberWordServiceProvider extends ServiceProvider {
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('number-word', function($app)
        {
            return new NumberWord();
        });
    }
}
