<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\BackgroundRepository;

class BackgroundControllerTest extends WebTestCase
{
    public function testGetAllBackgrounds(): void
    {
        $client = static::createClient();
        $backgroundRepository = static::getContainer()->get(BackgroundRepository::class);
        $crawler = $client->request('GET', 'api/backgrounds');

        $response = $client->getResponse()->getContent();
        $totalBackgrounds = count($backgroundRepository->findAll());

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, $totalBackgrounds);
    }
    
    public function testGetOneBackground(): void
    {
        $client = static::createClient();
        $backgroundRepository = static::getContainer()->get(BackgroundRepository::class);
        $allBackgrounds = $backgroundRepository->findAll();
        $randomBackground = $allBackgrounds[array_rand($allBackgrounds)];
        
        $crawler = $client->request('GET', 'api/backgrounds/'.$randomBackground->getId());
        $response = $client->getResponse()->getContent();

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, 1);
        $this->assertEquals($data->id, $randomBackground->getId());
    }
    
}
