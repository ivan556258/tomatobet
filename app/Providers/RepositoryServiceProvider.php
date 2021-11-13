<?php
namespace App\Providers;

use App\Repository\Eloquent\{BaseRepository, PostRepository, TypeSportRepository};
use App\Repository\Contracts\{EloquentRepositoryInterface, PostRepositoryInterface, TypeSportRepositoryInterface};
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(TypeSportRepositoryInterface::class, TypeSportRepository::class);
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
