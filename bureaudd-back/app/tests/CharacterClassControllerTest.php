<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\CharacterClassRepository;

class CharacterClassControllerTest extends WebTestCase
{
    public function testGetAllCharacterClasses(): void
    {
        $client = static::createClient();
        $characterClassRepository = static::getContainer()->get(CharacterClassRepository::class);
        $crawler = $client->request('GET', 'api/classes');

        $response = $client->getResponse()->getContent();
        $totalCharacterClasses = count($characterClassRepository->findAll());

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, $totalCharacterClasses);
    }
    
    // public function testGetOneCharacter(): void
    // {
    //     $client = static::createClient();
    //     $characterRepository = static::getContainer()->get(CharacterRepository::class);
    //     $allCharacters = $characterRepository->findAll();
    //     $randomCharacter = $allCharacters[array_rand($allCharacters)];
        
    //     $crawler = $client->request('GET', 'api/characters/'.$randomCharacter->getId());
    //     $response = $client->getResponse()->getContent();

    //     $total = json_decode($response)->total;
    //     $data = json_decode($response)->data;
        
    //     $this->assertResponseIsSuccessful();
    //     $this->assertEquals($total, 1);
    //     $this->assertEquals($data->id, $randomCharacter->getId());
    // }
    
}
