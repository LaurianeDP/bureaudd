<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\NoteRepository;

class NoteControllerTest extends WebTestCase
{
    public function testGetAllNotes(): void
    {
        $client = static::createClient();
        $noteRepository = static::getContainer()->get(NoteRepository::class);
        $crawler = $client->request('GET', 'api/notes');

        $response = $client->getResponse()->getContent();
        $totalNotes = count($noteRepository->findAll());

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, $totalNotes);
    }
    
    public function testGetOneNote(): void
    {
        $client = static::createClient();
        $noteRepository = static::getContainer()->get(NoteRepository::class);
        $allNotes = $noteRepository->findAll();
        $randomNote = $allNotes[array_rand($allNotes)];
        
        $crawler = $client->request('GET', 'api/notes/'.$randomNote->getId());
        $response = $client->getResponse()->getContent();

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, 1);
        $this->assertEquals($data->id, $randomNote->getId());
    }
    
}
