<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\RaceRepository;

class RaceControllerTest extends WebTestCase
{
    public function testGetAllRaces(): void
    {
        $client = static::createClient();
        $raceRepository = static::getContainer()->get(RaceRepository::class);
        $crawler = $client->request('GET', 'api/races');

        $response = $client->getResponse()->getContent();
        $totalRaces = count($raceRepository->findAll());

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, $totalRaces);
    }
    
    public function testGetOneRace(): void
    {
        $client = static::createClient();
        $raceRepository = static::getContainer()->get(RaceRepository::class);
        $allRaces = $raceRepository->findAll();
        $randomRace = $allRaces[array_rand($allRaces)];
        
        $crawler = $client->request('GET', 'api/races/'.$randomRace->getId());
        $response = $client->getResponse()->getContent();

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, 1);
        $this->assertEquals($data->id, $randomRace->getId());
    }
    
}
