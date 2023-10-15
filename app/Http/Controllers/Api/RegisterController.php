<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Repository\UserRepository;
use App\Http\Controllers\Controller;
class RegisterController extends Controller
{
    public function register(CreateUserRequest $request,UserRepository $userRepository)
    {
        $userRepository->create($request);

        return response()->json(['message'=>'success','data'=>'user has been created successfully'],201);
        
    }

}
