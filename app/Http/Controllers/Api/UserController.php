<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repository\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UserRepository $userRepository)
    {
        $users = $userRepository->all();

        return response()->json(['message'=>'success','data'=>$users],201);
    }
}
