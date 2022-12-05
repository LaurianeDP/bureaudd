<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\TransformationRepository;

class TransformationControllerTest extends WebTestCase
{
    public function testGetAllTransformations(): void
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
    
    public function testGetOneTransformation(): void
    {
        $client = static::createClient();
        $transformationRepository = static::getContainer()->get(TransformationRepository::class);
        $allTransformations = $transformationRepository->findAll();
        $randomTransformation = $allTransformations[array_rand($allTransformations)];
        
        $crawler = $client->request('GET', 'api/transformations/'.$randomTransformation->getId());
        $response = $client->getResponse()->getContent();

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, 1);
        $this->assertEquals($data->id, $randomTransformation->getId());
    }
    
}
