<?php

namespace App\Providers;
use App\Repositories\BankAccountRepository;
use App\Repositories\BankAccountRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class BankAccountRepositoryProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(BankAccountRepository::class, BankAccountRepositoryEloquent::class);
    }

    public function boot()
    {
        //
    }
}
