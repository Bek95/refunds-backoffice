<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tsi\Infrastructure\Refund\Service\RefundService;

class RefundController extends Controller
{
    private $refundService;

    public function __construct(RefundService $refundService)
    {
        $this->refundService = $refundService;
    }

    public function index()
    {
        return view('refund.create-refund');
    }

    public function createRefundRequest(Request $request)
    {
        $data = $request->all();
        $res = $this->refundService->createRefundRequest($data);
        if ($res == false){
            $error = 'A problem occurred, the creation of a refund request could not be created, please try again';
            return view('refund.create-refund', compact('error'));
        }

        $success = 'the refund was successfully created successfully';
        return view('refund.create-refund', compact('success'));
    }

    public function allRefunds()
    {
        $refunds = $this->refundService->allRefunds();

        return view('refund.refund-list', compact('refunds'));

    }


}
