<?php

namespace Laravel\CashierConnect\Exceptions;

use Laravel\CashierConnect\Payment;

class PaymentActionRequired extends IncompletePayment
{
    /**
     * Create a new PaymentActionRequired instance.
     *
     * @param  \Laravel\Cashier\Payment  $payment
     * @return static
     */
    public static function incomplete(Payment $payment)
    {
        return new static(
            $payment,
            'The payment attempt failed because additional action is required before it can be completed.'
        );
    }
}