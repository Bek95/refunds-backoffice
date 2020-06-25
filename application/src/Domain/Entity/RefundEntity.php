<?php


namespace Tsi\Domain\Entity;

use JsonSerializable;

class RefundEntity implements JsonSerializable
{

    /**
     * @var srting
     */
    protected $reference;

    /**
     * @var srting
     */
    protected $status;

    /**
     * @var srting
     */
    protected $transaction_id;

    /**
     * @var srting
     */
    protected $customer_id;

    /**
     * @var srting
     */
    protected $first_name;

    /**
     * @var srting
     */
    protected $last_name;

    /**
     * @var srting
     */
    protected $phone_number;

    /**
     * @var srting
     */
    protected $email;

    /**
     * @var srting
     */
    protected $amount;

    /**
     * @var srting
     */
    protected $amount_currency;

    /**
     * @var srting
     */
    protected $transaction_date;

    /**
     * @var srting
     */
    protected $created_at;

    /**
     * @var srting
     */
    protected $updated_at;

    /**
     * @var srting
     */
    protected $order_refund_author;

    /**
     * @var srting
     */
    protected $refund_accept_author;


    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        $refund = [
            "reference" => $this->reference,
            "status" => $this->status,
            "transaction_id" => $this->transaction_id,
            "customer_id" => $this->customer_id,
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "phone_number" => $this->phone_number,
            "email" => $this->email,
            "amount" => $this->amount,
            "amount_currency" => $this->amount_currency,
            "transaction_date" => $this->transaction_date,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "order_refund_author" => $this->order_refund_author,
            "refund_accept_author" => $this->refund_accept_author,
        ];

        return $refund;
    }

    /**
     * @return srting
     */
    public function getReference(): srting
    {
        return $this->reference;
    }

    /**
     * @param srting $reference
     */
    public function setReference(srting $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @return srting
     */
    public function getStatus(): srting
    {
        return $this->status;
    }

    /**
     * @param srting $status
     */
    public function setStatus(srting $status): void
    {
        $this->status = $status;
    }

    /**
     * @return srting
     */
    public function getTransactionId(): srting
    {
        return $this->transaction_id;
    }

    /**
     * @param srting $transaction_id
     */
    public function setTransactionId(srting $transaction_id): void
    {
        $this->transaction_id = $transaction_id;
    }

    /**
     * @return srting
     */
    public function getCustomerId(): srting
    {
        return $this->customer_id;
    }

    /**
     * @param srting $customer_id
     */
    public function setCustomerId(srting $customer_id): void
    {
        $this->customer_id = $customer_id;
    }

    /**
     * @return srting
     */
    public function getFirstName(): srting
    {
        return $this->first_name;
    }

    /**
     * @param srting $first_name
     */
    public function setFirstName(srting $first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return srting
     */
    public function getLastName(): srting
    {
        return $this->last_name;
    }

    /**
     * @param srting $last_name
     */
    public function setLastName(srting $last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @return srting
     */
    public function getPhoneNumber(): srting
    {
        return $this->phone_number;
    }

    /**
     * @param srting $phone_number
     */
    public function setPhoneNumber(srting $phone_number): void
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @return srting
     */
    public function getEmail(): srting
    {
        return $this->email;
    }

    /**
     * @param srting $email
     */
    public function setEmail(srting $email): void
    {
        $this->email = $email;
    }

    /**
     * @return srting
     */
    public function getAmount(): srting
    {
        return $this->amount;
    }

    /**
     * @param srting $amount
     */
    public function setAmount(srting $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return srting
     */
    public function getAmountCurrency(): srting
    {
        return $this->amount_currency;
    }

    /**
     * @param srting $amount_currency
     */
    public function setAmountCurrency(srting $amount_currency): void
    {
        $this->amount_currency = $amount_currency;
    }

    /**
     * @return srting
     */
    public function getTransactionDate(): srting
    {
        return $this->transaction_date;
    }

    /**
     * @param srting $transaction_date
     */
    public function setTransactionDate(srting $transaction_date): void
    {
        $this->transaction_date = $transaction_date;
    }

    /**
     * @return srting
     */
    public function getCreatedAt(): srting
    {
        return $this->created_at;
    }

    /**
     * @param srting $created_at
     */
    public function setCreatedAt(srting $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return srting
     */
    public function getUpdatedAt(): srting
    {
        return $this->updated_at;
    }

    /**
     * @param srting $updated_at
     */
    public function setUpdatedAt(srting $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return srting
     */
    public function getOrderRefundAuthor(): srting
    {
        return $this->order_refund_author;
    }

    /**
     * @param srting $order_refund_author
     */
    public function setOrderRefundAuthor(srting $order_refund_author): void
    {
        $this->order_refund_author = $order_refund_author;
    }

    /**
     * @return srting
     */
    public function getRefundAcceptAuthor(): srting
    {
        return $this->refund_accept_author;
    }

    /**
     * @param srting $refund_accept_author
     */
    public function setRefundAcceptAuthor(srting $refund_accept_author): void
    {
        $this->refund_accept_author = $refund_accept_author;
    }




}
