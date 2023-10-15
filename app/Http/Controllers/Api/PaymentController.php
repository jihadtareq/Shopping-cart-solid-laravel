<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
}
