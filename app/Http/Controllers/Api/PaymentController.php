<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repository\UserRepository;
use app\Services\CheckoutStatusService;
use app\Services\NotificationService;
use Illuminate\Http\Request;
use App\Services\PaymentService;

class PaymentController extends Controller
{
    public function payment(Request $request,UserRepository $userRepository,PaymentService $paymentService,NotificationService $notificationService)
    {
        $payment = $paymentService->initizalize($request->payment);
        $response = $payment->pay();

        //make service to check user exist if not create it
        $user = $userRepository->getUser($request->userId);

        $notificationService->sendNotification($user);
        return response()->json(['msg'=>'success','data'=>$response],201);

    }


    public function status(Request $request)
    {
        $response = new CheckoutStatusService();
        

        return $request->getStatus();
    }
}
