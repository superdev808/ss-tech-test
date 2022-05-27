<?php

namespace App\Http\Controllers;

use App\Repositories\PaymentRepository;
use Illuminate\Http\JsonResponse;

class PaymentController extends Controller
{
    protected $paymentRepository;

    public function __construct(PaymentRepository $paymentRepository)
    {
        $this->paymentepository = $paymentRepository;
    }

    public function index(Request $request): JsonResponse
    {
        $payments = $this->paymentepository->getAll($request->all());

        return new JsonResponse(['payments' => $payments]);
    }
}
