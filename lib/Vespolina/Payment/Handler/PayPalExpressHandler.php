<?php

namespace Vespolina\Payment\Handler;

use Vespolina\Entity\Payment\PaymentContext;
use Vespolina\Entity\Payment\PaymentRequestInterface;
use Vespolina\Payment\Handler\PaymentHandlerInterface;

class PayPalExpressHandler extends BasePaymentHandler
{
    // https://www.x.com/developers/paypal/documentation-tools/express-checkout/how-to/ht_ec-recurringPaymentProfile-curl-etc
    // Step 1:
    public function authorize(PaymentProfileInterface $profile, PaymentContext $paymentContext)
    {

    }

    // Step 3:
    public function completeAuthorize(PaymentProfileInterface $profile, PaymentContext $paymentContext)
    {

    }

    // Step 4:
    public function purchase(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext)
    {

    }

}
