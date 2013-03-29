<?php

namespace Vespolina\Payment\Manager;

use Vespolina\Entity\Payment\PaymentProfile;
use Vespolina\Payment\Handler\PaymentHandlerInterface;

class PaymentManager 
{
    protected $paymentHandlers;

    /**
     * @inheritdoc
     */
    public function addPaymentHandler(PaymentHandlerInterface $handler)
    {
        $type = $handler->getType();
        $this->paymentHandlers[$type] = $handler;
    }

    /**
     * @inheritdoc
     */
    public function getPaymentHandler($type)
    {
        if (isset($this->paymentHandlers[$type])) {
            return $this->paymentHandlers[$type];
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getPaymentHandlers()
    {
        return $this->paymentHandlers;
    }

    public function createPaymentProfile($type)
    {
        if (!in_array($type, PaymentProfile::$validTypes)) {
            throw new InvalidConfigurationException(sprintf("'%s' is not a valid Payment Profile type", $type));
        }

        $childClass = 'Vespolina\\Entity\\Partner\\PaymentProfileType\\'.str_replace(' ', '', $type);

        if (!class_exists($childClass)) {
            throw new InvalidConfigurationException(sprintf("Sorry class '%s' was not found", $childClass));
        }

        return new $childClass;
    }
}
