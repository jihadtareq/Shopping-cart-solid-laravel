<?php
namespace App\Repository;

use App\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Request;
use App\Models\User;
class UserRepository implements UserRepositoryInterface
{
    public function create(Request $request)
    {
        $user = New User();
        $user->name =  $request->name;
        $user->email =  $request->email;
        $user->phone =  $request->phone;
        $user->password =  bcrypt($request->password);
        $user->gender =  $request->gender;
        $user->birthday =  $request->birthday;
        $user->country_id =  $request->country_id;
        $user->active = 1 ;
        $user->save();
    }
    
    public function update($id,Request $request) 
    {
        $user = User::find($id);
        $user->name =  $request->name;
        $user->email =  $request->email;
        $user->phone =  $request->phone;
        $user->gender =  $request->gender;
        $user->birthday =  $request->birthday;
        $user->country_id =  $request->country_id;
        $user->save();
    }

    public function changePassword($id, $password)
    {
        $user = User::find($id);
        $user->password = $password;
        $user->save();
    }
}