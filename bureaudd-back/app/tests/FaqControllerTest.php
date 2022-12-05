<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\FaqRepository;

class FaqControllerTest extends WebTestCase
{
    public function testGetAllFaqs(): void
    {
        $client = static::createClient();
        $faqRepository = static::getContainer()->get(FaqRepository::class);
        $crawler = $client->request('GET', 'api/faqs');

        $response = $client->getResponse()->getContent();
        $totalFaqs = count($faqRepository->findAll());

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, $totalFaqs);
    }
    
    public function testGetOneFaq(): void
    {
        $client = static::createClient();
        $faqRepository = static::getContainer()->get(FaqRepository::class);
        $allFaqs = $faqRepository->findAll();
        $randomFaq = $allFaqs[array_rand($allFaqs)];
        
        $crawler = $client->request('GET', 'api/faqs/'.$randomFaq->getId());
        $response = $client->getResponse()->getContent();

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, 1);
        $this->assertEquals($data->id, $randomFaq->getId());
    }
    
}
