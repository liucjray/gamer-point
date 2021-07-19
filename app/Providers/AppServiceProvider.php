<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // FIXME: 在正式環境上不需要修正預設長度，考慮拿掉
        // 參考資料：<https://blog.keniver.com/2017/11/laravel-%E5%B8%B8%E8%A6%8B%E5%95%8F%E9%A1%8C-specified-key-long/>
        Schema::defaultStringLength(191);
    }
}
