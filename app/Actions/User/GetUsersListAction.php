<?php

namespace App\Actions\User;

use App\Contracts\GetUsersListActionContract;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

class GetUsersListAction implements GetUsersListActionContract
{
    public function __invoke(): LengthAwarePaginator
    {
        return User::query()->paginate();
    }
}
