<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Doctrine\ORM\EntityManagerInterface;

class LoginSignUpControllerTest extends WebTestCase
{
    private $client;
    private $entityManager;
    private $userRepository;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->entityManager = static::getContainer()->get(EntityManagerInterface::class);
        $this->userRepository = static::getContainer()->get('App\Repository\UsersRepository');

        $this->entityManager->beginTransaction();
    }

    protected function tearDown(): void
    {
        $this->entityManager->rollback();
        parent::tearDown();
    }

    public function testRegisterSuccess(): void
    {
        $this->client->request('POST', '/register', [
            'pseudo' => 'TestUser',
            'email' => 'testuser@example.com',
            'password' => 'Password1!'
        ]);

        $this->assertResponseRedirects('/');
        $this->client->followRedirect();
        $this->assertSelectorTextContains('.flash-success', 'Compte créé avec succès');

        $user = $this->userRepository->findOneBy(['mail_address' => 'testuser@example.com']);
        $this->assertNotNull($user);
    }

    public function testRegisterWithInvalidEmail(): void
    {
        $this->client->request('POST', '/register', [
            'pseudo' => 'InvalidUser',
            'email' => 'invalid-email',
            'password' => 'Password1!'
        ]);

        $this->assertResponseRedirects('/portal');
        $this->client->followRedirect();
        $this->assertSelectorTextContains('.flash-error', 'Format d\'email invalide');
    }

    public function testRegisterWithWeakPassword(): void
    {
        $this->client->request('POST', '/register', [
            'pseudo' => 'WeakPassUser',
            'email' => 'weakpass@example.com',
            'password' => '123456'
        ]);

        $this->assertResponseRedirects('/portal');
        $this->client->followRedirect();
        $this->assertSelectorTextContains('.flash-error', 'Le mot de passe doit contenir au moins 8 caractères');
    }

    public function testLoginSuccess(): void
    {
        $user = new \App\Entity\Users();
        $user->setName('LoginTest');
        $user->setMailAddress('logintest@example.com');
        $user->setPwd('Password1!');

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $this->client->request('POST', '/login', [
            'email' => 'logintest@example.com',
            'password' => 'Password1!'
        ]);

        $this->assertResponseRedirects('/');
        $this->client->followRedirect();
        $this->assertSelectorTextContains('.flash-success', 'Connexion réussie');
    }

    public function testLoginWithInvalidCredentials(): void
    {
        $this->client->request('POST', '/login', [
            'email' => 'wrong@example.com',
            'password' => 'WrongPassword'
        ]);

        $this->assertResponseRedirects('/portal');
        $this->client->followRedirect();
        $this->assertSelectorTextContains('.flash-error', 'Identifiants invalides');
    }

    public function testLogout(): void
    {
        $session = static::getContainer()->get('session.factory')->createSession();
        $session->set('user_id', 1);
        $session->set('user_name', 'TestUser');
        $session->save();
        $this->client->getCookieJar()->set(new \Symfony\Component\BrowserKit\Cookie($session->getName(), $session->getId()));

        $this->client->request('GET', '/logout');
        $this->assertResponseRedirects('/portal');
        $this->client->followRedirect();
        $this->assertSelectorTextContains('.flash-success', 'Vous avez été déconnecté');
    }
}