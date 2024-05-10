<?php

namespace App\Http\Controllers\Api\User;

use App\Contracts\GetUsersListActionContract;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class GetUsersListController extends Controller
{
    public function __invoke(
        GetUsersListActionContract $getUserListAction
    ): JsonResponse
    {
        return response()->json([
            'users' => $getUserListAction()
        ]);
    }
}
