<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\UserRepository;
use App\Repository\CharacterRepository;
use App\Entity\User;

class UserControllerTest extends WebTestCase
{
    public function testGetAllUsers(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $crawler = $client->request('GET', 'api/users');

        $response = $client->getResponse()->getContent();
        $totalUsers = count($userRepository->findAll());

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, $totalUsers);
    }
    
    public function testGetOneUser(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $allUsers = $userRepository->findAll();
        $randomUser = $allUsers[array_rand($allUsers)];
        
        $crawler = $client->request('GET', 'api/users/'.$randomUser->getId());
        $response = $client->getResponse()->getContent();

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, 1);
        $this->assertEquals($data->id, $randomUser->getId());
    }

    public function testGetAllCharactersOfOneUser(): void
    {
        $client = static::createClient();

        $characterRepository = static::getContainer()->get(CharacterRepository::class);
        $userRepository = static::getContainer()->get(UserRepository::class);
        
        $allUsers = $userRepository->findAll();
        $randomUser = $allUsers[array_rand($allUsers)];
        
        do {
            $randomUser = $allUsers[array_rand($allUsers)];
        } while (count($randomUser->getCharacters()) === 0);
        
        $randomUserCharacters = count($randomUser->getCharacters());
        
        $crawler = $client->request('GET', 'api/users/'.$randomUser->getId().'/characters');
        $response = $client->getResponse()->getContent();

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, $randomUserCharacters);
    }

    public function testGetActiveCharacterOfOneUser(): void
    {
        $client = static::createClient();

        $characterRepository = static::getContainer()->get(CharacterRepository::class);
        $userRepository = static::getContainer()->get(UserRepository::class);
        
        $allUsers = $userRepository->findAll();
        $randomUser = $allUsers[array_rand($allUsers)];
        
        do {
            $randomUser = $allUsers[array_rand($allUsers)];
        } while (count($randomUser->getCharacters()) === 0);
        
        $randomUserCharacters = $randomUser->getCharacters();
        $randomCharacter = $randomUserCharacters[array_rand($randomUserCharacters)];
        $randomCharacter->setActive(true);
        
        $crawler = $client->request('GET', 'api/users/'.$randomUser->getId().'/activeCharacter');
        $response = $client->getResponse()->getContent();

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, count($randomUserCharacters));
    }


}
