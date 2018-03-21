<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //如果手机访问，不显示foot
        $showFoot = true;
        if(\App\Components\Helper::isMobile())
            $showFoot = false;
        view()->share('showFoot',$showFoot);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
