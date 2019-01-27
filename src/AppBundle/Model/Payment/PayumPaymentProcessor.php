<?php

/*
 * This file is part of the storytelling app
 * Developed by Hexa24 Club
 */

namespace AppBundle\Model\Payment;

use AppBundle\Entity\Payment;
use Payum\Core\Payum;
use Symfony\Component\HttpFoundation\Request;

class PayumPaymentProcessor implements PaymentProcessorInterface
{
    /** @var Payum */
    protected $payum;

    /**
     * PaymentProcessor constructor.
     *
     * @param Payum $payum
     */
    public function __construct(Payum $payum)
    {
        $this->payum = $payum;
    }

    public function process(Payment $payment)
    {
        // TODO: Implement process() method.
    }

    public function processFromRequest(Request $request)
    {
        // TODO: Implement processFromRequest() method.
    }
}
