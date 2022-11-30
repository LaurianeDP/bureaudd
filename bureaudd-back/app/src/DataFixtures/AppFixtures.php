<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\UserFactory;
use App\Factory\CharacterFactory;
use App\Factory\BackgroundFactory;
use App\Factory\RaceFactory;
use App\Factory\CharacterClassFactory;
use App\Entity\CharacterClass;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $allUsers = UserFactory::createMany(15);
        $allRaces = RaceFactory::createMany(5);
        $allBackgrounds = BackgroundFactory::createMany(7);
        $allClasses = CharacterClassFactory::createMany(7);
        
        $admin = UserFactory::createOne([
            'roles' => ['USER', 'ADMIN']
        ]);

        $allCharacters = CharacterFactory::createMany(20, function() use ($allUsers, $allRaces, $allBackgrounds) {
            return [
                'user' => $allUsers[array_rand($allUsers)],
                'race' => $allRaces[array_rand($allRaces)],
                'background' => $allBackgrounds[array_rand($allBackgrounds)],
            ];
        });

        foreach($allCharacters as $character) {
            $character->addCharacterClass(CharacterClassFactory::random()->object());
        }

        $manager->flush();
    }
}
