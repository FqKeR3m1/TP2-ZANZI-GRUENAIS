<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use AppBundle\Entity\User;

class UserCommand extends \Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand
{
    protected function configure(){
        $this->setName('users:list')
             ->setDescription('List every user');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $userService = $this->getContainer()->get('user.schema');
        $users = $userService->getUsers();

        echo('Liste des utilisateurs:');
        foreach ($users as $user){
            echo("\n".'  - '.$user->getUsername());
        }
    }
}