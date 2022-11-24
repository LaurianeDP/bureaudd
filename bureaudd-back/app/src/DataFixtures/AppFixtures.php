<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\UserFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createMany(15);
        
        $admin = UserFactory::createOne();
        $admin->setRoles(['ADMIN']);

        

        $manager->flush();
    }
}
