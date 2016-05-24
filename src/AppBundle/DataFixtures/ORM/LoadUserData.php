<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i < 30; $i++){
            $userAdmin = new User();
            $userAdmin->setUsername('User'.$i);
            $userAdmin->setPassword('P@ssw0rd');
            $userAdmin->setEmail('User'.$i.'@gmail.com');

            $manager->persist($userAdmin);
        }
        $manager->flush();
    }
}