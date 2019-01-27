<?php

/*
 * This file is part of the storytelling app
 * Developed by Hexa24 Club
 */

namespace AppBundle\Model;

use Doctrine\ORM\EntityManagerInterface;

class PlanManager
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * PlanManager constructor.
     *
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @return array
     */
    public function allPlans()
    {

    }

    /**
     * @param array $criteria
     *
     * @return null|object
     */
    public function findPlanByCriteria(array $criteria)
    {
    
    }
}
