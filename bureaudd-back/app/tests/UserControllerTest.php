<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\UserRepository;

class UserControllerTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $crawler = $client->request('GET', 'api/users');

        $response = $client->getResponse()->getContent();
        $totalUsers = $userRepository->findAll();

        $this->assertResponseIsSuccessful();
        $this->assertEquals(count($response), 16);
    }
}
