<?php

namespace Vespolina\Payment\Handler;


use Vespolina\Entity\Partner\PaymentProfileInterface;
use Vespolina\Entity\Payment\PaymentRequestInterface;

interface PaymentHandlerInterface
{
    /**
     * Sets the partner reference in the PaymentProfile
     *
     * @param PaymentProfileInterface $profile
     * @return mixed
     */
    function authorize(PaymentProfileInterface $profile);

    /**
     * @param PaymentRequestInterface $paymentRequest
     * @return Adjustment
     */
    function refund(PaymentRequestInterface $paymentRequest);

    /**
     * @param PaymentRequestInterface $paymentRequest
     * @return Adjustment
     */
    function request(PaymentRequestInterface $paymentRequest);

}
