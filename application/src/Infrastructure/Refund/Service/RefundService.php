<?php


namespace Tsi\Infrastructure\Refund\Service;


use Tsi\Infrastructure\Refund\Repository\RefundRepository;

class RefundService
{
    private $refundRepository;

    public function __construct(RefundRepository $refundRepository)
    {
        $this->refundRepository = $refundRepository;
    }

    public function createRefundRequest(array $data)
    {
        return $this->refundRepository->createRefundRequest($data);
    }

    public function allRefunds()
    {
        return $this->refundRepository->allRefunds();
    }

}
