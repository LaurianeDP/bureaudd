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
