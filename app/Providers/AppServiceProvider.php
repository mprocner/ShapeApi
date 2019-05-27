<?php

namespace App\Providers;

use App\Context\ShapeContext\Contracts\ShapeRepositoryInterface;
use App\Context\ShapeContext\Repositories\ShapeRepository;
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
        $this->app->bind(
            ShapeRepositoryInterface::class,
            ShapeRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
