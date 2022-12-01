<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\TransformationRepository;

class TransformationControllerTest extends WebTestCase
{
    public function testGetAllRaces(): void
    {
        $client = static::createClient();
        $transformationRepository = static::getContainer()->get(TransformationRepository::class);
        $crawler = $client->request('GET', 'api/transformations');

        $response = $client->getResponse()->getContent();
        $totalTransformations = count($transformationRepository->findAll());

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, $totalTransformations);
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
