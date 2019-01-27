<?php

/*
 * This file is part of the storytelling app
 * Developed by Hexa24 Club
 */

namespace AppBundle\Model\Payment;

use AppBundle\Entity\Payment;

interface PaymentProcessorInterface
{
    public function process(Payment $payment);
}
