<?php

namespace Vespolina\Payment\Handler;

use Omnipay\Common\GatewayInterface;
use Vespolina\Entity\Payment\PaymentContext;
use Vespolina\Entity\Payment\PaymentRequestInterface;
use Vespolina\Payment\Handler\PaymentHandlerInterface;

class PayPalExpressHandler extends BasePaymentHandler
{
    protected $cancelUrl;
    protected $gateway;
    protected $returnUrl;

    public function __construct(GatewayInterface $gateway, $options)
    {
        $this->gateway = $gateway;
        if (!isset($options['cancelUrl'])) {
            throw new \Exception();
        }
        $this->cancelUrl = $options['cancelUrl'];
        if (!isset($options['returnUrl'])) {
            throw new \Exception();
        }
        $this->returnUrl = $options['returnUrl'];
    }

    // https://www.x.com/developers/paypal/documentation-tools/express-checkout/how-to/ht_ec-recurringPaymentProfile-curl-etc
    // Step 1:
    public function authorize(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext)
    {
        // todo, check profile to make sure this isn't recurring and already set up with paypal

        $redirectResponse = $this->gateway->authorize($data)->send();
        $paymentContext->set('redirectResponse', $redirectResponse);

    }

    // Step 3:
    public function completeAuthorize(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext)
    {

    }

    // Step 4:
    public function purchase(PaymentRequestInterface $paymentRequest, PaymentContext $paymentContext)
    {

    }

}
