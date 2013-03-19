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
     * @return \Vespolina\Entity\Payment\TransactionInterface
     */
    function completeAuthorize(PaymentProfileInterface $profile);

    /**
     * @param PaymentRequestInterface $paymentRequest
     * @return \Vespolina\Entity\Payment\TransactionInterface
     */
    function capture(PaymentProfileInterface $profile);

    /**
     * @param PaymentRequestInterface $paymentRequest
     * @return \Vespolina\Entity\Payment\TransactionInterface
     */
    function purchase(PaymentRequestInterface $paymentRequest);

    /**
     * @param PaymentRequestInterface $paymentRequest
     * @return \Vespolina\Entity\Payment\TransactionInterface
     */
    function completePurchase(PaymentRequestInterface $paymentRequest);

    /**
     * @param PaymentRequestInterface $paymentRequest
     * @return \Vespolina\Entity\Payment\TransactionInterface
     */
    function refund(PaymentRequestInterface $paymentRequest);

    /**
     * @param PaymentRequestInterface $paymentRequest
     * @return \Vespolina\Entity\Payment\TransactionInterface
     */
    function void(PaymentRequestInterface $paymentRequest);
}
