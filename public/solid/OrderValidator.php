<?php

namespace solid;

class OrderValidator
{
    public function validate(array $order):bool
    {
        return !empty($orderData['product_id']) || !empty($orderData['user_email']);
    }
}