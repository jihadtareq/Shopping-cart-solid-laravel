<?php
namespace App\Repository;

use App\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Request;
use App\Models\User;
class UserRepository implements UserRepositoryInterface
{

    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
        
    }
    public function create($request)
    {
        $user = New User();
        $user->name =  $request->name;
        $user->email =  $request->email;
        $user->phone =  $request->phone;
        $user->type_id =  $request->typeId;
        $user->password =  bcrypt($request->password);
        $user->gender =  $request->gender;
        $user->birthday =  $request->birthday;
        $user->country_id =  $request->countryId;
        $user->active = 1 ;
        $user->save();
    }
    
    public function update($id,$request) 
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

    public function all()
    {
        return $this->user->all();
    }

    public function getUnactiveUsers()
    {
        return $this->user->where('active',1)->get();
    }

    function getUser($Id)
    {
        return $this->user->find($Id);

    }
}