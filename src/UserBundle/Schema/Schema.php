<?php

namespace UserBundle\Schema;


use AppBundle\AppBundle;
use Doctrine\ORM\EntityManagerInterface;

class Schema
{
    protected $em;

    /**
     * Schema constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @return array
     */
    public function getUsers(){
        $repository = $this->em->getRepository('AppBundle:User');
        $users = $repository->findAll();

        return $users;
    }

}