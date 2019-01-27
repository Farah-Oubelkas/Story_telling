<?php

/*
 * This file is part of the storytelling app
 * Developed by Hexa24 Club
 */

namespace AppBundle\Model;

use AppBundle\Entity\Event;
use AppBundle\Entity\InvitationRequest;
use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use FOS\UserBundle\Doctrine\UserManager as FOSUserManager;

class InvitationRequestManager
{
    /** @var EntityManagerInterface */
    private $entityManager;

    /**
     * @var FOSUserManager
     */
    private $fosUserManager;

    /**
     * @var NotificationManager
     */
    private $notificationManager;

    /**
     * InvitationRequestManager constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param FOSUserManager         $fosUserManager
     * @param NotificationManager    $notificationManager
     */
    public function __construct(EntityManagerInterface $entityManager, FOSUserManager $fosUserManager, NotificationManager $notificationManager)
    {
        $this->entityManager = $entityManager;
        $this->fosUserManager = $fosUserManager;
        $this->notificationManager = $notificationManager;
    }

    /**
     * @param $email
     * @param Event $event
     * @param bool  $flush
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     *
     * @return InvitationRequest
     */
    public function createInvitationRequest($email, Event $event, $flush = true)
    {

       
}
}
