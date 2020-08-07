<?php
 
namespace App\Providers;
use App\larademo\larademo;
use Illuminate\Support\ServiceProvider;
 
class larademoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('larademo',function()
        {
            return new larademo();
        });
    }
 
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
 
    }

}