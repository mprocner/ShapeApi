<?php

namespace App\Providers;

use App\Context\ShapeContext\Contracts\Calculators\DiscCalculatorInterface;
use App\Context\ShapeContext\Contracts\Calculators\RectangleCalculatorInterface;
use App\Context\ShapeContext\Contracts\Calculators\TriangleCalculatorInterface;
use App\Context\ShapeContext\Contracts\ShapeRepositoryInterface;
use App\Context\ShapeContext\Repositories\ShapeRepository;
use App\Context\ShapeContext\Services\DiscCalculator;
use App\Context\ShapeContext\Services\RectangleCalculator;
use App\Context\ShapeContext\Services\TriangleCalculator;
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

        $this->app->bind(
            TriangleCalculatorInterface::class,
            TriangleCalculator::class
        );
        $this->app->bind(
            DiscCalculatorInterface::class,
            DiscCalculator::class
        );
        $this->app->bind(
            RectangleCalculatorInterface::class,
            RectangleCalculator::class
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
