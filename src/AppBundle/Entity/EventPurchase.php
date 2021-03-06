<?php

/*
 * This file is part of the storytelling app
 * Developed by Hexa24 Club
 */

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * EventPurchase.
 *
 *
 * @ORM\Table(name="event_purchase")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventPurchaseRepository")
 * @ApiResource()
 */
class EventPurchase
{
    use TimestampableEntity;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="quota", type="decimal")
     */
    private $quota;

    /**
     * @var string
     *
     * @ORM\Column(name="currencyCode", type="string", length=255)
     */
    private $currencyCode = 'EUR';

    /**
     * @var Plan
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Plan", inversedBy="eventPurchases" )
     */
    private $plan;

    /**
     * @var Event
     *
     * @ORM\OneToOne(targetEntity="Event", mappedBy="eventPurchase")
     */
    private $event;

    /**
     * @var Payment [] | ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Payment", mappedBy="eventPurchase")
     */
    private $payments;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quota.
     *
     * @param float $quota
     *
     * @return EventPurchase
     */
    public function setQuota($quota)
    {
        $this->quota = $quota;

        return $this;
    }

    /**
     * Get quota.
     *
     * @return float
     */
    public function getQuota()
    {
        return $this->quota;
    }

    /**
     * Set currencyCode.
     *
     * @param string $currencyCode
     *
     * @return EventPurchase
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get currencyCode.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set plan.
     *
     * @param Plan $plan
     *
     * @return EventPurchase
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get plan.
     *
     * @return Plan
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set event.
     *
     * @param Event $event
     *
     * @return EventPurchase
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event.
     *
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Add payments.
     *
     * @param Payment $payment
     *
     * @return $this
     */
    public function addChallenges(Payment $payment)
    {
        $this->payments[] = $payment;

        return $this;
    }

    /**
     * Remove payments.
     *
     * @param \AppBundle\Entity\Payment $payment
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeChallenges(Payment $payment)
    {
        return $this->payments->removeElement($payment);
    }

    /**
     * Get payments.
     *
     * @return Payment[] | \Doctrine\Common\Collections\ArrayCollection
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->payments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add payment.
     *
     * @param \AppBundle\Entity\Payment $payment
     *
     * @return EventPurchase
     */
    public function addPayment(\AppBundle\Entity\Payment $payment)
    {
        $this->payments[] = $payment;

        return $this;
    }

    /**
     * Remove payment.
     *
     * @param \AppBundle\Entity\Payment $payment
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removePayment(\AppBundle\Entity\Payment $payment)
    {
        return $this->payments->removeElement($payment);
    }
}
