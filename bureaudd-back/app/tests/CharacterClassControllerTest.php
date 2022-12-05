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
    
    public function testGetOneCharacterClass(): void
    {
        $client = static::createClient();
        $characterClassRepository = static::getContainer()->get(CharacterClassRepository::class);
        $totalCharacterClasses = $characterClassRepository->findAll();
        $randomClass = $totalCharacterClasses[array_rand($totalCharacterClasses)];
        
        $crawler = $client->request('GET', 'api/classes/'.$randomClass->getId());
        $response = $client->getResponse()->getContent();

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, 1);
        $this->assertEquals($data->id, $randomClass->getId());
    }
    
}
