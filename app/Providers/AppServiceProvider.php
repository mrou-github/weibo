<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        //如果你是在版本低于 5.7.7 的 MySQL release 或者版本低于 10.2.2 的 MariaDB release 上创建索引，那就需要你手动配置迁移生成的默认字符串长度。 即在
        Schema::defaultStringLength(191);
    }
}
