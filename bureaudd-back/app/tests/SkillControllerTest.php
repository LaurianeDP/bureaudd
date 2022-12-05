<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\SkillRepository;

class SkillControllerTest extends WebTestCase
{
    public function testGetAllSkills(): void
    {
        $client = static::createClient();
        $skillRepository = static::getContainer()->get(SkillRepository::class);
        $crawler = $client->request('GET', 'api/skills');

        $response = $client->getResponse()->getContent();
        $totalSkills = count($skillRepository->findAll());

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, $totalSkills);
    }
    
    public function testGetOneSkill(): void
    {
        $client = static::createClient();
        $skillRepository = static::getContainer()->get(SkillRepository::class);
        $allSkills = $skillRepository->findAll();
        $randomSkill = $allSkills[array_rand($allSkills)];
        
        $crawler = $client->request('GET', 'api/skills/'.$randomSkill->getId());
        $response = $client->getResponse()->getContent();

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, 1);
        $this->assertEquals($data->id, $randomSkill->getId());
    }
    
}
