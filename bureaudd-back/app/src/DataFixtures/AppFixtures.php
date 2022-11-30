<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\UserFactory;
use App\Factory\CharacterFactory;
use App\Factory\BackgroundFactory;
use App\Factory\RaceFactory;
use App\Factory\CharacterClassFactory;
use App\Factory\CampaignFactory;
use App\Factory\FaqFactory;
use App\Factory\FeedbackFactory;
use App\Factory\NoteFactory;
use App\Factory\TransformationFactory;
use App\Factory\SkillFactory;
use App\Factory\SpellFactory;
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
        $allCampaigns = CampaignFactory::createMany(10);
        
        $admin = UserFactory::createOne([
            'roles' => ['USER', 'ADMIN']
        ]);

        $allCharacters = CharacterFactory::createMany(20, function() use ($allUsers, $allRaces, $allBackgrounds, $allCampaigns) {
            return [
                'user' => $allUsers[array_rand($allUsers)],
                'race' => $allRaces[array_rand($allRaces)],
                'background' => $allBackgrounds[array_rand($allBackgrounds)],
                'campaign' => $allCampaigns[array_rand($allCampaigns)],
            ];
        });

        foreach($allCharacters as $character) {
            $character->addCharacterClass(CharacterClassFactory::random()->object());
        }

        $allFeedbacks = FeedbackFactory::createMany(30, function() use ($allUsers) {
            return [
                'user' => $allUsers[array_rand($allUsers)]
            ];
        });

        $allNotes = NoteFactory::createMany(50, function() use ($allCharacters) {
            return [
                'characterAssociated' => $allCharacters[array_rand($allCharacters)]
            ];
        });

        $allSkills = SkillFactory::createMany(50);

        foreach($allSkills as $skill) {
            $fields = ['characterClass', 'race', 'background'];
            $field = $fields[array_rand($fields)];
            switch($field) {
                case 'characterClass':
                    $skill->addCharacterClass(CharacterClassFactory::random()->object());
                    break;
                case 'race':
                    $skill->addRace(RaceFactory::random()->object());
                    break;
                case 'background':
                    $skill->addBackground(BackgroundFactory::random()->object());
                    break;
            }
        }

        $allSpells = SpellFactory::createMany(50);

        foreach($allSpells as $spell) {
            $fields = ['characterClass', 'race'];
            $field = $fields[array_rand($fields)];
            switch($field) {
                case 'characterClass':
                    $spell->addCharacterClass(CharacterClassFactory::random()->object());
                    break;
                case 'race':
                    $spell->addRace(RaceFactory::random()->object());
                    break;
            }
        }

        FaqFactory::createMany(8);
        TransformationFactory::createMany(20);

        $manager->flush();
    }
}
