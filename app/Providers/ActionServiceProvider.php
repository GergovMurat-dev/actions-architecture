<?php

namespace App\Providers;

use App\Actions\User\GetUsersListAction;
use App\Contracts\GetUsersListActionContract;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    public array $bindings = [
        GetUsersListActionContract::class => GetUsersListAction::class
    ];
}
