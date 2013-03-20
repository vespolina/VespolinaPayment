<?php

namespace Vespolina\Payment\Handler;

use Vespolina\Entity\Payment\PaymentContext;
use Vespolina\Entity\Payment\PaymentRequestInterface;

interface PaymentHandlerInterface
{
    /**
     * @param PaymentProfileInterface $profile
     * @return mixed
     */
    function authorize(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext);

    /**
     * @param PaymentRequestInterface $paymentRequest
     * @return \Vespolina\Entity\Payment\TransactionInterface
     */
    function completeAuthorize(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext);

    /**
     * @param PaymentRequestInterface $paymentRequest
     * @return \Vespolina\Entity\Payment\TransactionInterface
     */
    function capture(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext);

    /**
     * @param PaymentRequestInterface $paymentRequest
     * @return \Vespolina\Entity\Payment\TransactionInterface
     */
    function purchase(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext);

    /**
     * @param PaymentRequestInterface $paymentRequest
     * @return \Vespolina\Entity\Payment\TransactionInterface
     */
    function completePurchase(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext);

    /**
     * @param PaymentRequestInterface $paymentRequest
     * @return \Vespolina\Entity\Payment\TransactionInterface
     */
    function refund(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext);

    /**
     * @param PaymentRequestInterface $paymentRequest
     * @return \Vespolina\Entity\Payment\TransactionInterface
     */
    function void(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext);
}
