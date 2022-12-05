<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\FeedbackRepository;

class FeedbackControllerTest extends WebTestCase
{
    public function testGetAllFeedbacks(): void
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
    
    public function testGetOneFeedback(): void
    {
        $client = static::createClient();
        $feedbackRepository = static::getContainer()->get(FeedbackRepository::class);
        $allFeedbacks = $feedbackRepository->findAll();
        $randomFeedback = $allFeedbacks[array_rand($allFeedbacks)];
        
        $crawler = $client->request('GET', 'api/feedbacks/'.$randomFeedback->getId());
        $response = $client->getResponse()->getContent();

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, 1);
        $this->assertEquals($data->id, $randomFeedback->getId());
    }
    
}
