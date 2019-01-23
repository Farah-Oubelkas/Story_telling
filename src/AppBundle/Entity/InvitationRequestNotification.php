<?php

/*
 * This file is part of the storytelling app
 * Developed by Hexa24 Club
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class InvitationRequestNotification.
 *
 * @ORM\Table(name="invitation_request_notification")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InvitationRequestNotificationRepository")
 */
class InvitationRequestNotification extends BaseNotification
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var InvitationRequest
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\InvitationRequest",  mappedBy="notification", cascade={"persist", "remove"})
     */
    private $invitationRequest;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function getObject()
    {
        // TODO: Implement getObject() method.
    }

    /**
     * @return InvitationRequest
     */
    public function getInvitationRequest()
    {
        return $this->invitationRequest;
    }

    /**
     * @param InvitationRequest $invitationRequest
     */
    public function setInvitationRequest(InvitationRequest $invitationRequest)
    {
        $this->invitationRequest = $invitationRequest;
    }

    public function getSource()
    {
        // TODO: Implement getSource() method.
    }
}
