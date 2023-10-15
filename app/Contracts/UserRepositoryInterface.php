<?php
namespace App\Contracts;

interface UserRepositoryInterface
{

    public function create($data);
    public function update($id,$data);

    public function changePassword($id,$password);

}