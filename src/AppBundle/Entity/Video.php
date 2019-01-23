<?php

/*
 * This file is part of the storytelling app
 * Developed by Hexa24 Club
 */

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Video.
 *
 * @ORM\Table(name="video")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VideoRepository")
 * @ApiResource()
 */
class Video extends Media
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
