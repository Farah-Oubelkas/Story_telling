<?php

/*
/*
 * This file is part of the storytelling app
 * Developed by Hexa24 Club
 */

namespace AppBundle\Model;

use AppBundle\Entity\Event;
use AppBundle\Entity\Image;
use AppBundle\Entity\Media;
use AppBundle\Entity\User;
use AppBundle\Entity\Video;
use AppBundle\Exception\FileNotAuthorizedException;
use AppBundle\Filesystem\FileManager;
use AppBundle\Filesystem\UploadManager;
use Doctrine\ORM\EntityManagerInterface;
use Gaufrette\File;
use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use Symfony\Component\HttpFoundation\File\File as SymfonyFile;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class MediaManager
{
    /**
     * @var UploadManager
     */
    protected $uploadManager;

    /**
     * @var FileManager
     */
    protected $fileManager;

    /** @var TokenStorageInterface */
    protected $tokenStorage;

    /** @var EntityManagerInterface */
    protected $entityManager;

    /**
     * MediaManager constructor.
     *
     * @param UploadManager          $uploadManager
     * @param FileManager            $fileManager
     * @param TokenStorageInterface  $tokenStorage
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(UploadManager $uploadManager, FileManager $fileManager, TokenStorageInterface $tokenStorage, EntityManagerInterface $entityManager)
    {
        $this->uploadManager = $uploadManager;
        $this->fileManager = $fileManager;
        $this->tokenStorage = $tokenStorage;
        $this->entityManager = $entityManager;
    }

    /**
     * Creates a media from a Gaufrette file.
     *
     * @param File   $file
     * @param User   $by
     * @param bool   $andSave
     * @param string $type
     *
     * @return Media
     */
    public function createMediaFromFile(File $file, User $by, $andSave = true, $type = Media::class)
    {
       
    }

    /**
     * Creates a media from a file in the local filesystem.
     *
     * @param $filePath
     * @param User|null $by
     * @param bool      $andSave
     *
     * @return Media
     */
    public function createMediaFromLocalFile($filePath, User $by = null, $andSave = true)
    {
        
    }

    public function saveMedia(Media $media, $andFlush = true)
    {
        
    }

    public function deleteMedia(Media $media)
    {
       
    }


    public function trashMedia(int $mediaId)
    {
        // Put $media to trash
    }

    public function unTrashMedia(int $mediaId)
    {
    }

    /**
     * @param UploadedFile $file
     * @param User|null    $by
     * @param bool         $andSave
     *
     * @throws FileNotAuthorizedException
     *
     * @return Media
     */
    public function uploadImage(UploadedFile $file, User $by = null, $andSave = true)
    {
       
    }

    /**
     * @param UploadedFile $file
     * @param User|null    $by
     * @param bool         $andSave
     *
     * @throws FileNotAuthorizedException
     *
     * @return Media
     */
    public function uploadVideo(UploadedFile $file, User $by = null, $andSave = true)
    {
        
    }

    /**
     * @param UploadedFile $file
     * @return bool
     */
    private function isImage(UploadedFile $file)
    {
        
    }

    /**
     * @param UploadedFile $file
     * @return bool
     */
    private function isVideo(UploadedFile $file)
    {
        
    }

    public function mediaUploadedFifteenMinutes(Event $event)
    {
       
    }
}
