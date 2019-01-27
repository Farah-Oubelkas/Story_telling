<?php

/*
 * This file is part of the storytelling app
 * Developed by Hexa24 Club
 */

namespace AppBundle\Model\Payment;

use AppBundle\Entity\Event;
use AppBundle\Entity\EventPurchase;
use AppBundle\Entity\Payment;
use Symfony\Component\HttpFoundation\Request;

class PaymentManager
{
    /** @var PaymentProcessorInterface */
    protected $paymentProcessor;

    /**
     * PaymentManager constructor.
     *
     * @param PaymentProcessorInterface $paymentProcessor
     */
    public function __construct(PaymentProcessorInterface $paymentProcessor)
    {
        $this->paymentProcessor = $paymentProcessor;
    }

    /**
     * Creates Payment instance from Request.
     *
     * @param Request $request
     */
    public function createFromRequest(Request $request)
    {
        throw new \LogicException('Not yet implemented.');
    }

    public function createPaymentForEvent(Event $event, Payment $payment, array $coupons = [])
    {
        throw new \LogicException('Not yet implemented.');
    }

    protected function createPaymentForEventPurchase(EventPurchase $eventPurchase, Payment $payment, array $coupons = [])
    {
        throw new \LogicException('Not yet implemented.');
    }

    protected function applyCoupon($eventPurchase, $coupon)
    {
        throw new \LogicException('Not yet implemented.');
    }

    /**
     * @param Event $event
     *
     * @return bool
     */
    public function isTotalPayed(Event $event)
    {
        
    }

    /**
     * @param Event $event
     *
     * @return int
     */
    public function TotalPayed(Event $event)
    {
    }
}
