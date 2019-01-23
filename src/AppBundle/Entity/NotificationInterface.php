<?php

/*
 * This file is part of the storytelling app
 * Developed by Hexa24 Club
 */

namespace AppBundle\Entity;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Templating\EngineInterface;

interface NotificationInterface
{
    public function getObject();

    public function formatMessageToText();

    public function formatMessageToMail(EngineInterface $templateEngine, UrlGeneratorInterface $router);

    public function getSource();
}
