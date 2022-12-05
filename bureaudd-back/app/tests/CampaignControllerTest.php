<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\CampaignRepository;

class CampaignControllerTest extends WebTestCase
{
    public function testGetAllCampaigns(): void
    {
        $client = static::createClient();
        $campaignRepository = static::getContainer()->get(CampaignRepository::class);
        $crawler = $client->request('GET', 'api/campaigns');

        $response = $client->getResponse()->getContent();
        $totalCampaigns = count($campaignRepository->findAll());

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, $totalCampaigns);
    }
    
    public function testGetOneCampaign(): void
    {
        $client = static::createClient();
        $campaignRepository = static::getContainer()->get(CampaignRepository::class);
        $allCampaigns = $campaignRepository->findAll();
        $randomCampaign = $allCampaigns[array_rand($allCampaigns)];
        
        $crawler = $client->request('GET', 'api/campaigns/'.$randomCampaign->getId());
        $response = $client->getResponse()->getContent();

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, 1);
        $this->assertEquals($data->id, $randomCampaign->getId());
    }
    
}
