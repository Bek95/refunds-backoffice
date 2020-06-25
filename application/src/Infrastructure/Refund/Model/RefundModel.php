<?php


namespace Tsi\Infrastructure\Refund\Model;


use Jenssegers\Mongodb\Eloquent\Model;

class RefundModel extends Model
{

    protected $connection = 'mongodb';
    protected $collection = 'refund';

    protected $hidden = [
        '_id'
    ];

    protected $fillable = [
         'status', 'first_name', 'last_name', 'phone_number', 'email', 'transaction_date', 'reference',
        'amount', 'amount_currency', 'order_refund_author', 'status',
    ];

}
