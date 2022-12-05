<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\SpellRepository;

class SpellControllerTest extends WebTestCase
{
    public function testGetAllSpells(): void
    {
        $client = static::createClient();
        $spellRepository = static::getContainer()->get(SpellRepository::class);
        $crawler = $client->request('GET', 'api/spells');

        $response = $client->getResponse()->getContent();
        $totalSpells = count($spellRepository->findAll());

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, $totalSpells);
    }
    
    public function testGetOneSpell(): void
    {
        $client = static::createClient();
        $spellRepository = static::getContainer()->get(SpellRepository::class);
        $allSpells = $spellRepository->findAll();
        $randomSpell = $allSpells[array_rand($allSpells)];
        
        $crawler = $client->request('GET', 'api/spells/'.$randomSpell->getId());
        $response = $client->getResponse()->getContent();

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, 1);
        $this->assertEquals($data->id, $randomSpell->getId());
    }
    
}
