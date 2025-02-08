<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Doctrine\ORM\EntityManagerInterface;

class MainInterfaceControllerTest extends WebTestCase
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

    public function testMainPage(): void
    {
        $this->client->request('GET', '/');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Fil d\'actualité');
    }

    public function testCreatePost(): void
    {
        $crawler = $this->client->request('GET', '/');
        $form = $crawler->selectButton('Poster')->form();
        $form['postText'] = 'Test Post Content';
        $form['postTag'] = 'test';

        $this->client->submit($form);
        $this->assertResponseRedirects('/');
        $this->client->followRedirect();

        $this->assertSelectorTextContains('.post', 'Test Post Content');
    }

    public function testDeletePost(): void
    {
        $postId = 1;
        $this->client->request('POST', "/delete_action/$postId");
        $this->assertResponseRedirects('/');
    }

    public function testLikePost(): void
    {
        $postId = 1;
        $crawler = $this->client->request('GET', '/');
        $form = $crawler->selectButton('👍 Liker')->form();
        $form['id'] = $postId;
        $this->client->submit($form);
        $this->assertResponseRedirects('/');
    }

    public function testUnlikePost(): void
    {
        $postId = 1;
        $crawler = $this->client->request('GET', '/');
        $form = $crawler->selectButton('👎 Unliker')->form();
        $form['id'] = $postId;
        $this->client->submit($form);
        $this->assertResponseRedirects('/');
    }
}