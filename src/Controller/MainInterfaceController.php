<?php

namespace App\Controller;

use App\Entity\Posts;
use App\Repository\LikesRepository;
use App\Repository\PostsRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainInterfaceController extends AbstractController
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    #[Route('/', name: 'app_main_interface')]
    public function mainPage(PostsRepository $postsRepository): Response
    {
        $allPostsArray = $postsRepository->findAll();

        $allPostsArray = array_map(function ($post) {
            return [
                'postId' => $post->getId(),
                'creatorId' =>$post->getCreator()->getId(),
                'creatorName' => $post->getCreator()->getName(),
                'creationDate' => $post->getCreationDate()->format('Y-m-d H:i:s'),
                'content' => $post->getContent(),
            ];
        }, $allPostsArray);
        $allPostsArray = array_reverse($allPostsArray);

        return $this->render('main_interface/index.html.twig', [
            'controller_name' => 'MainInterfaceController',
            'posts' => $allPostsArray,
        ]);
    }

    #[Route('/post_action', name: 'app_post_interface_action', methods: ['POST'])]
    public function postAction(Request $request, UsersRepository $usersRepository,EntityManagerInterface $entityManager): Response
    {
        $postText = $request->request->get('postText');
        $postTag = $request->request->get('postTag');

        $session = $this->requestStack->getSession();
        $userId = $session->get('user_id');
        $theUser = $usersRepository->find($userId);

        $post = new Posts();
        $post->setCreator($theUser);
        $post->setCreationDate(new \DateTime());
        $post->setContent($postText);

        $entityManager->persist($post);
        $entityManager->flush();

        $this->addFlash('success', 'Post créé avec succès');

        return $this->redirectToRoute('app_main_interface');
    }

    #[Route('/delete_action/{id}', name: 'app_delete_action', methods: ['POST'])]
    public function deleteAction(int $id, Request $request, PostsRepository $postsRepository, LikesRepository $likesRepository, EntityManagerInterface $entityManager): Response
    {

        $post = $postsRepository->find($id);

        $likes = $likesRepository->findBy(['the_post' => $post]);
        foreach ($likes as $like) {
            $entityManager->remove($like);
        }

        $entityManager->remove($post);
        $entityManager->flush();

        $this->addFlash('success', 'Post supprimé avec succès.');

        return $this->redirectToRoute('app_main_interface');
    }

}

