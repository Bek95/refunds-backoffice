<?php


namespace Tsi\Infrastructure\Refund\Repository;


use Illuminate\Support\Facades\DB;
use Tsi\Infrastructure\Refund\Model\RefundModel;

class RefundRepository
{
    private $refundModel;

    public function __construct(RefundModel $refundModel)
    {
        $this->refundModel = $refundModel;
    }

    public function createRefundRequest(array $data)
    {

        $res = $this->refundModel->create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone_number'=> $data['phone_number'],
            'email' => $data['email'],
            'zip_code' => $data['zip_code'],
            'transaction_date' => $data['transaction_date'],
            'reference' => $data['reference'],
            'amount' => $data['amount'],
            'amount_currency' => $data['amount_currency'],
            'order_refund_author' => $data['order_refund_author'],
            'status' => 'PENDING',
        ]);

        return $res;
    }

    public function allRefunds()
    {
        $refunds = $this->refundModel->all();
//        var_dump($refunds);
        return $refunds;
    }

}
