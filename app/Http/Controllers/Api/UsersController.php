<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class UsersController extends Controller
{
    public function index()
    {
        //return UserResource::collection(User::paginate(10));
        return User::latest('id')->get();
    }

    public function show(User $user)
    {
        //return new UserResource($user);
        return $user;
    }
}
