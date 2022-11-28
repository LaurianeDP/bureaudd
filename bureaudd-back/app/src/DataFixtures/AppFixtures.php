<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\UserFactory;
use App\Factory\CharacterFactory;
use App\Repository\UserRepository;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AppFixtures implements FixtureInterface, ContainerAwareInterface
{
    private $container;
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager): void
    {
        $em = $this->container->get('doctrine')->getManager('default');

        UserFactory::createMany(15);
        $userRepository = $em->getRepository('User');
        $allUsers = $userRepository->findAll();
        
        $admin = UserFactory::createOne();
        $admin->setRoles(['ADMIN']);

        $characters = CharacterFactory::createMany(20);

        foreach($character as $characters) {
            $randomUser = $allUsers[array_rand($allUsers)];
            $character->setUser($randomUser->getId());
        }

        $manager->flush();
    }
}
