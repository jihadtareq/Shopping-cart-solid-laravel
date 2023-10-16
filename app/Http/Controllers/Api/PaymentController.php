<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use app\Services\CheckoutStatusService;
use Illuminate\Http\Request;
use App\Services\PaymentService;
class PaymentController extends Controller
{
    public function payment(Request $request,PaymentService $paymentService)
    {
        $payment = $paymentService->initizalize($request->payment);
        $response = $payment->pay();
        return response()->json(['msg'=>'success','data'=>$response],201);

    }


    public function status(Request $request)
    {
        // according to liskov substitution we can use any status service without any error
        $response = new CheckoutStatusService();
        

        return $request->getStatus();
    }
}
