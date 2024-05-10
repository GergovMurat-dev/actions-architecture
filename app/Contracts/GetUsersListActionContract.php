<?php

namespace App\Contracts;

use Illuminate\Pagination\LengthAwarePaginator;

interface GetUsersListActionContract
{
    public function __invoke(): LengthAwarePaginator;
}
