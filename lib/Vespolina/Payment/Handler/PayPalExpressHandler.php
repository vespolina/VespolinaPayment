<?php

namespace Vespolina\Payment\Handler;

use Vespolina\Entity\Payment\PaymentContext;
use Vespolina\Entity\Payment\PaymentRequestInterface;
use Vespolina\Payment\Handler\PaymentHandlerInterface;

class PayPalExpressHandler extends PaymentHandlerInterface
{
    // https://www.x.com/developers/paypal/documentation-tools/express-checkout/how-to/ht_ec-recurringPaymentProfile-curl-etc
    // Step 1:
    function authorize(PaymentProfileInterface $profile, PaymentContext $paymentContext)
    {

    }

    // Step 3:
    function completeAuthorize(PaymentProfileInterface $profile, PaymentContext $paymentContext)
    {

    }

    // Step 4:
    function purchase(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext)
    {

    }

}
