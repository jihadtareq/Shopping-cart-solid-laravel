<?php

namespace app\Services;
use app\Contracts\AuthorizePayableInterface;

class CheckoutStatusService implements AuthorizePayableInterface
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