<?php

/*
 * This file is part of the storytelling app
 * Developed by Hexa24 Club
 */

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Payum\Core\Model\Token;

/**
 * PaymentToken.
 *
 * @ORM\Table(name="payment_token")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PaymentTokenRepository")
 * @ApiResource()
 */
class PaymentToken extends Token
{
}
