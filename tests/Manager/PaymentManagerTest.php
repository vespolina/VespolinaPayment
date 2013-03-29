<?php

use Vespolina\Payment\Manager\PaymentManager;

class PaymentManagerTest extends PHPUnit_Framework_TestCase 
{
    public function testAddPaymentHandler()
    {
        $paymentMgr = new PaymentManager();
        $handler = $this->createPaymentHandler('test');
        $paymentMgr->addPaymentHandler($handler);

        $this->assertSame($handler, $paymentMgr->getPaymentHandler('test'), 'a handler should be returned by type');
        $this->assertTrue(is_array($paymentMgr->getPaymentHandlers()));
        $this->assertContains($handler, $paymentMgr->getPaymentHandlers(), 'return all of the handlers');

        $handler2 = $this->createPaymentHandler('test2');
        $paymentMgr->addPaymentHandler($handler2);
        $this->assertContains($handler2, $paymentMgr->getPaymentHandlers(), 'return all of the handlers');
        $this->assertCount(2, $paymentMgr->getPaymentHandlers());
    }

    protected function createPaymentHandler($type)
    {
        $paymentHandler = $this->getMock(
            'Vespolina\Payment\Handler\BasePaymentHandler',
            array('createPaymentProfile', 'getType'),
            array(),
            '',
            false
        );
        $paymentHandler->expects($this->any())
            ->method('createPayment')
            ->will($this->returnValue($this->getMock(
                    'Vespolina\Entity\Payment\PaymentProfile')));
        $paymentHandler->expects($this->any())
            ->method('getType')
            ->will($this->returnValue($type));

        return $paymentHandler;
    }
}
