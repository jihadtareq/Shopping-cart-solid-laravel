<?php

namespace app\Services;

use app\Contracts\NotifiableInterface;

class NotificationService
{
    public function sendNotification(NotifiableInterface $notifiableInterface)
    {

        $notifiableInterface->getNotifyEmail();
    }

}