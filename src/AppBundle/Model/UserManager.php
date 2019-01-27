<?php

/*
 * This file is part of the storytelling app
 * Developed by Hexa24 Club
 */

namespace AppBundle\Model;

use AppBundle\Entity\User;
use AppBundle\Mailer\Mailer;
use Doctrine\ORM\EntityManager;
use FOS\UserBundle\Doctrine\UserManager as FOSUserManager;
use FOS\UserBundle\Event\GetResponseNullableUserEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Mailer\Mailer as FOSMailer;
use FOS\UserBundle\Util\TokenGeneratorInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class UserManager
{
    protected static $defaultAvatar = __DIR__.'/../../../web/images/Imagetests/1.jpg';

    /**
     * @var \FOS\UserBundle\Doctrine\UserManager
     */
    private $fosUserManager;

    /** @var Mailer */
    private $mailer;

    /** @var \FOS\UserBundle\Mailer\Mailer */
    private $fos_mailer;

    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @var JWTManager
     */
    private $jwtTokenManager;

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * @var TokenGeneratorInterface
     */
    private $tokenGenerator;

    /** @var MediaManager */
    private $mediaManager;

    /**
     * @var int
     */
    private $retryTtl;

    /** @var TokenStorageInterface */
    private $tokenStorage;

    /**
     * UserManager constructor.
     *
     * @param FOSUserManager          $fosUserManager
     * @param Mailer                  $mailer
     * @param FOSMailer               $fos_mailer
     * @param EntityManager           $em
     * @param JWTManager              $jwtTokenManager
     * @param TokenGeneratorInterface $tokenGenerator
     * @param TokenStorageInterface   $tokenStorage
     * @param MediaManager            $mediaManager
     * @param EventDispatcher         $eventDispatcher
     */
    public function __construct(
        FOSUserManager $fosUserManager,
        Mailer $mailer,
        FOSMailer $fos_mailer,
        EntityManager $em,
        JWTManager $jwtTokenManager,
        TokenGeneratorInterface $tokenGenerator,
        TokenStorageInterface $tokenStorage,
        MediaManager $mediaManager,
        EventDispatcher $eventDispatcher
    ) {
        $this->fosUserManager = $fosUserManager;
        $this->mailer = $mailer;
        $this->fos_mailer = $fos_mailer;
        $this->em = $em;
        $this->jwtTokenManager = $jwtTokenManager;
        $this->tokenGenerator = $tokenGenerator;
        $this->tokenStorage = $tokenStorage;
        $this->mediaManager = $mediaManager;

        $this->eventDispatcher = $eventDispatcher;
        $this->retryTtl = 7200;
    }

    /**
     * Create new user in the database.
     *
     * @param User $user
     * @param bool $flush
     * @param bool $sendMail
     * @param bool $api
     *
     * @return User
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function createUser(User $user, $flush = true, $sendMail = false, $api = false)
    {
        
    }

    /**
     * @param string $email
     * @param string $username
     * @param string $plainPassword
     *
     * @return User|\FOS\UserBundle\Model\UserInterface|null
     */
    public function createUserFromEmail(string $email, string $username = '', string $plainPassword = '')
    {
        
    }

    /**
     * @param User $user
     * @param bool $sendMail
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function updatePassword(User $user, $sendMail = true)
    {
       
    }

    /**
     * Delete user from the database.
     *
     * @param User $user
     */
    public function deleteUser(User $user, $sendMail = true)
    {
        
    }

    /**
     * @return array
     */
    public function allUsers()
    {
        
    }

    /**
     * @param User $user
     * @param $newTimezoneId
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     *
     * @return User
     */
    public function updateTimezoneId(User $user, $newTimezoneId)
    {
        
    }

    /**
     * @param User $user
     *
     * @return string
     */
    public function generateToken(User $user)
    {
        
    }

    /**
     * @return User | mixed
     */
    public function getLoggedInUser()
    {
      
    }

    /**
     * @param User $user
     */
    public function updateUser(User $user)
    {
        
    }

    /**
     * @return \FOS\UserBundle\Model\UserManager
     */
    public function getFOSUserManager(): \FOS\UserBundle\Model\UserManager
    {
    }

    /**
     * @param string  $email
     * @param Request $request
     *
     * @return null|\Symfony\Component\HttpFoundation\Response
     */
    public function forgotPasswordMobile($email, Request $request)
    {
        
    }

    /**
     * @throws \Doctrine\ORM\ORMException
     *
     * @return int
     */
    public function getNbAdmin()
    {
        
    }

    /**
     * @throws \Doctrine\ORM\ORMException
     *
     * @return int
     */
    public function getNbUsersDisabled()
    {
       
    }

    /**
     * @throws \Doctrine\ORM\ORMException
     *
     * @return int
     */
    public function getNbClient()
    {
    }
}
