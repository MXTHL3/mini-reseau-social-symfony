<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Doctrine\ORM\EntityManagerInterface;

class ProfileControllerTest extends WebTestCase
{
    private $client;
    private $entityManager;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->entityManager = static::$container->get(EntityManagerInterface::class);
    }

    protected function tearDown(): void
    {
        $this->entityManager->getConnection()->close();
        $this->entityManager = null;
    }

    public function testProfilePage(): void
    {
        $userId = 1;
        $this->client->request('GET', "/profile=$userId");
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', '@user_name');
    }

    public function testDeletePostFromProfile(): void
    {
        $postId = 1;
        $this->client->request('POST', "/delete_action/$postId");
        $this->assertResponseRedirects('/profile=1');
    }

    public function testSearchFunctionality(): void
    {
        $this->client->request('GET', '/profile=1');
        $crawler = $this->client->getCrawler();
        $form = $crawler->selectButton('🔍')->form();
        $form['search'] = 'Test';
        $this->client->submit($form);
        $this->assertResponseIsSuccessful();
    }
}