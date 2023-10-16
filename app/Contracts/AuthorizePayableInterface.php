<?php

namespace app\Contracts;

interface AuthorizePayableInterface
{
    public function authorize(); //for third party

    public function getStatus();


}