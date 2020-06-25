<?php


namespace Tsi\Infrastructure\Refund\Hydrator;


use Tsi\Domain\Entity\RefundEntity;
use Tsi\Infrastructure\Refund\Model\RefundModel;

class RefundHydrator
{
    public static function Hydrate(RefundModel $refundModel): RefundEntity
    {
        $refundEntity = new RefundEntity();


        return $refundEntity;
    }

}
