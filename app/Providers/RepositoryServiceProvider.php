<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\IntegrationRepositoryInterface;
use App\Repositories\IntegrationRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(IntegrationRepositoryInterface::class, IntegrationRepository::class);
    }

    public function boot()
    {
        //
    }
}
