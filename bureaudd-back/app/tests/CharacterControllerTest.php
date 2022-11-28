<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\CharacterRepository;
use App\Repository\UserRepository;

class CharacterControllerTest extends WebTestCase
{
    public function testGetAllCharacters(): void
    {
        $client = static::createClient();
        $characterRepository = static::getContainer()->get(CharacterRepository::class);
        $crawler = $client->request('GET', 'api/characters');

        $response = $client->getResponse()->getContent();
        $totalCharacters = count($characterRepository->findAll());

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, $totalCharacters);
    }
    
    public function testGetOneCharacter(): void
    {
        $client = static::createClient();
        $characterRepository = static::getContainer()->get(CharacterRepository::class);
        $allCharacters = $characterRepository->findAll();
        $randomCharacter = $allCharacters[array_rand($allCharacters)];
        
        $crawler = $client->request('GET', 'api/characters/'.$randomCharacter->getId());
        $response = $client->getResponse()->getContent();

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, 1);
        $this->assertEquals($data->id, $randomCharacter->getId());
    }
    
}
