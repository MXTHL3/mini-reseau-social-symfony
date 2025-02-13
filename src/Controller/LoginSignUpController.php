<?php

namespace App\Controller;

use App\Entity\Users;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Attribute\Route;

class LoginSignUpController extends AbstractController
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    #[Route('/portal', name: 'app_login_sign_up')]
    public function index(): Response
    {
        return $this->render('login_sign_up/index.html.twig');
    }

    #[Route('/register', name: 'app_register', methods: ['POST'])]
    public function register(Request $request, EntityManagerInterface $entityManager): Response
    {
        $pseudo = $request->request->get('pseudo');
        $email = $request->request->get('email');
        $password = $request->request->get('password');

        $errors = [];

        if (!preg_match('/^[a-zA-Z][a-zA-Z0-9_-]*$/', $pseudo)) {
            $errors[] = 'Le pseudo doit commencer par une lettre et ne peut contenir que des lettres, des chiffres, des tirets bas (_) et des tirets (-)';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Format d\'email invalide';
        }

        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[{}()%&\-_!?.])[A-Za-z\d{}()%&\-_!?.]{8,}$/', $password)) {
            $errors[] = 'Le mot de passe doit contenir au moins 8 caractères, incluant une minuscule, une majuscule, un chiffre et un caractère spécial parmi {}()%&-_!?.';
        }

        if (!empty($errors)) {
            foreach ($errors as $error) {
                $this->addFlash('error', $error);
            }
            return $this->redirectToRoute('app_login_sign_up');
        }

        $user = new Users();
        $user->setName($pseudo);
        $user->setMailAddress($email);
        $user->setPwd($password);
        $user->setIsAdmin(false);

        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash('success', 'Compte créé avec succès');
        return $this->redirectToRoute('app_main_interface');
    }

    #[Route('/login', name: 'app_login', methods: ['POST'])]
    public function login(Request $request, UsersRepository $usersRepository): Response
    {
        $user = $usersRepository->findOneBy([
            'mail_address' => $request->request->get('email'),
            'pwd' => $request->request->get('password')
        ]);

        if (!$user) {
            $this->addFlash('error', 'Identifiants invalides');
            return $this->redirectToRoute('app_login_sign_up');
        }

        $session = $this->requestStack->getSession();
        $session->set('user_id', $user->getId());
        $session->set('user_name', $user->getName());

        $this->addFlash('success', 'Connexion réussie');
        return $this->redirectToRoute('app_main_interface');
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): Response
    {
        $session = $this->requestStack->getSession();
        $session->remove('user_id');
        $session->remove('user_name');

        $this->addFlash('success', 'Vous avez été déconnecté');
        return $this->redirectToRoute('app_login_sign_up');
    }



}