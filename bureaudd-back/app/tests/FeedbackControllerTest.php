<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\FeedbackRepository;

class FeedbackControllerTest extends WebTestCase
{
    public function testGetAllRaces(): void
    {
        $client = static::createClient();
        $feedbackRepository = static::getContainer()->get(FeedbackRepository::class);
        $crawler = $client->request('GET', 'api/feedbacks');

        $response = $client->getResponse()->getContent();
        $totalFeedbacks = count($feedbackRepository->findAll());

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, $totalFeedbacks);
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
