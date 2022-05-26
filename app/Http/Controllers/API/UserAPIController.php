<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserAPIController extends Controller
{

    public function index()
    {
        dd('entered');
    }


    public function show($id)
    {
        dd($id);
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            return $this->sendError('User not found');
        }
        $user->makeHidden(['password']);

        $data = $user->toArray();

        return $this->sendResponse($data, 'User retrieved successfully');
    }
}
