<?php

/*
 * This file is part of the storytelling app
 * Developed by Hexa24 Club
 */

namespace AppBundle\Model;

use AppBundle\Entity\Challenge;
use AppBundle\Entity\ChallengeNotification;
use AppBundle\Entity\InvitationRequest;
use AppBundle\Entity\InvitationRequestNotification;
use AppBundle\Entity\User;
use AppBundle\NotificationSystem\Sender\NotificationSender;
use Doctrine\ORM\EntityManager;
use FOS\UserBundle\Doctrine\UserManager as FOSUserManager;

class NotificationManager
{
    /**
     * @var NotificationSender
     */
    private $notificationSender;

    /**
     * @var UserManager
     */
    private $userManager;

    /**
     * @var FOSUserManager
     */
    private $fosUserManager;

    /**
     * @var EntityManager
     */
    private $em;

    /**
     * NotificationManager constructor.
     *
     * @param NotificationSender $notificationSender
     * @param UserManager        $userManager
     * @param FOSUserManager     $fosUserManager
     * @param EntityManager      $em
     */
    public function __construct(NotificationSender $notificationSender, UserManager $userManager, FOSUserManager $fosUserManager, EntityManager $em)
    {
        $this->notificationSender = $notificationSender;
        $this->userManager = $userManager;
        $this->fosUserManager = $fosUserManager;
        $this->em = $em;
    }

    /**
     * @param InvitationRequest $invitationRequest
     * @param User              $triggeredBy
     * @param bool              $deleteOnRead
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     *
     * @return InvitationRequestNotification
     */
    public function createNotificationForInvitationRequest(InvitationRequest $invitationRequest, User $triggeredBy, $deleteOnRead=false)
    {

    }

    /**
     * @param Challenge $challenge
     * @param User      $triggeredBy
     * @param bool      $deleteOnRead
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     *
     * @return array
     */
    public function createNotificationsForChallenge(Challenge $challenge, User $triggeredBy, $deleteOnRead = false)
    {
        
    }
}
