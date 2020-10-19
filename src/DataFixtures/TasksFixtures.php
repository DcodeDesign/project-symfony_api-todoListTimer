<?php

namespace App\DataFixtures;

use App\Entity\Tasks;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TasksFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $time= $date = new \DateTime();

        for ($i = 0; $i < 20; $i++) {
            $tasks = new Tasks();
            $tasks->setName('Task - '.$i);
            $tasks->setDuration( $time);
            $tasks->setIsTerminated(false);
            $manager->persist($tasks);
        }

        $manager->flush();
    }
}
