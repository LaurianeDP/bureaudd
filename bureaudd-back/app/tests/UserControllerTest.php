<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\UserRepository;

class UserControllerTest extends WebTestCase
{
    public function testUserControllerGetAllUsers(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $crawler = $client->request('GET', 'api/users');

        $response = $client->getResponse()->getContent();
        $totalUsers = count($userRepository->findAll());

        $total = json_decode($response)->total;
        $data = json_decode($response)->data;
        
        $this->assertResponseIsSuccessful();
        $this->assertEquals($total, $totalUsers);
    }
}
