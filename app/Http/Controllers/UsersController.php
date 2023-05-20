<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Resources\Users\UserPostResource;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {   
     
        return new UserPostResource(User::create($request->validated()));
    }

}
