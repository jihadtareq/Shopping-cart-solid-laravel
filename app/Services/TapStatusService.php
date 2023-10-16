<?php

namespace app\Services;
use app\Contracts\AuthorizePayableInterface;

class TapStatusService implements AuthorizePayableInterface
{
    public function authorize()
    {
        //authorization code
    }

    public function getStatus()
    {
        $this->authorize();

        return 'SUCCESS';
    }

}