<?php

/*
 * This file is part of the storytelling app
 * Developed by Hexa24 Club
 */

namespace AppBundle\Model;

use AppBundle\AppEvents;
use AppBundle\Entity\Event;
use AppBundle\Entity\EventPurchase;
use AppBundle\Entity\Media;
use AppBundle\Entity\Payment;
use AppBundle\Entity\Plan;
use AppBundle\Entity\User;
use AppBundle\Event\NewMediaUploadedEvent;
use AppBundle\Model\Payment\PaymentManager;
use Carbon\Carbon;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;

class EventManager
{
    /** @var EntityManagerInterface */
    private $entityManager;

    /** @var MediaManager */
    private $mediaManager;

    /** @var UserManager */
    private $userManager;

    /** @var EventDispatcher */
    private $eventDispatcher;

    /** @var PaymentManager */
    private $paymentManager;

    /**
     * EventManager constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param MediaManager           $mediaManager
     * @param UserManager            $userManager
     * @param PaymentManager         $paymentManager
     */
    public function __construct(EntityManagerInterface $entityManager, MediaManager $mediaManager, UserManager $userManager, PaymentManager $paymentManager, EventDispatcher $eventDispatcher)

    {
        $this->entityManager = $entityManager;
        $this->mediaManager = $mediaManager;
        $this->userManager = $userManager;
        $this->paymentManager = $paymentManager;

        $this->eventDispatcher = $eventDispatcher;
    }

    public function deleteUserEvents(User $user)
    {
    }

    public function deleteEvent(Event $event)
    {
        
        //TODO: delete all scheduler
    }

    public function closeEvent(Event $event)
    {

        //TODO:  delete all scheduler
    }
    public function createEvent(Plan $plan, Event $event, User $createdBy = null, $flush = true)
    {
        
    }

    public function createEventWithFreePlan(User $createdBy = null, Event $event, $flush = true)
    {
        
    }

    public function createEventWithStarterPlan(User $createdBy = null, Event $event, $flush = true)
    {
        
    }

    /**
     * @param int       $eventId
     * @param Media     $media
     * @param User|null $by
     *
     * @throws \Doctrine\ORM\EntityNotFoundException
     *
     * @return Event
     */
    public function addMedia(): Event
    {
  
    }

    private function getCreatedBy(): User
    {
    }

    /**
     * @param $eventId
     * @param bool $inTrash
     *
     * @throws \Doctrine\ORM\EntityNotFoundException
     *
     * @return Event
     */
    public function findEventById($eventId, $inTrash = false): Event
    {
       
    }

    /**
     * @param User $user
     *
     * @return array
     */
    public function lastIncompleteEvent(User $user)
    {
        
    }

    /**
     * @param bool $isPayed
     *
     * @throws \Doctrine\DBAL\DBALException
     *
     * @return int
     */
    public function countEventByPayment($isPayed = true)
    {
       
    }

    /**
     * @param $planKey
     *
     * @return int
     */
    public function countEventByPlan($planKey)
    {
        
    }

    /**
     * @return int
     */
    public function countAllPayment()
    {
       
    }

    /**
     * @param $user
     *
     * @return mixed
     */
    public function getPassedEvents($user)
    {
        
    }

    /**
     * @param $user
     *
     * @return array
     */
    public function getUpcomingEvents($user)
    {
        
    }

    /**
     * @param $user
     * @return array
     */
    public function getIsPaidEvents($user)
    {
        
    }

    /**
     * @return EntityManagerInterface
     */
    public function getEntityManager(): EntityManagerInterface
    {
        
    }


}
