<?php

namespace Vespolina\Payment\Handler;

use Vespolina\Entity\Payment\PaymentContext;
use Vespolina\Entity\Payment\PaymentRequestInterface;
use Vespolina\Exception\FunctionNotSupportedException;
use Vespolina\Payment\Handler\PaymentHandlerInterface;

abstract class BasePaymentHandler implements PaymentHandlerInterface
{
    /**
     * @inherits
     */
    public function authorize(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext)
    {
        $class = get_class($this);
        throw new FunctionNotSupportedException("The authorize method is not implemented in the $class handler");
    }

    /**
     * @inherits
     */
    public function completeAuthorize(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext)
    {
        $class = get_class($this);
        throw new FunctionNotSupportedException("The authorize method is not implemented in the $class handler");
    }

    /**
     * @inherits
     */
    public function capture(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext)
    {
        $class = get_class($this);
        throw new FunctionNotSupportedException("The authorize method is not implemented in the $class handler");
    }

    /**
     * @inherits
     */
    public function purchase(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext)
    {
        $class = get_class($this);
        throw new FunctionNotSupportedException("The authorize method is not implemented in the $class handler");
    }

    /**
     * @inherits
     */
    public function completePurchase(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext)
    {
        $class = get_class($this);
        throw new FunctionNotSupportedException("The authorize method is not implemented in the $class handler");
    }

    /**
     * @inherits
     */
    public function refund(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext)
    {
        $class = get_class($this);
        throw new FunctionNotSupportedException("The authorize method is not implemented in the $class handler");
    }

    /**
     * @inherits
     */
    public function void(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext)
    {
        $class = get_class($this);
        throw new FunctionNotSupportedException("The authorize method is not implemented in the $class handler");
    }
}
