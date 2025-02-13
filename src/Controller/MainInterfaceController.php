<?php

namespace App\Controller;

use App\Entity\Likes;
use App\Entity\Posts;
use App\Repository\LikesRepository;
use App\Repository\PostsRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\RedirectResponse;
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
    public function mainPage(PostsRepository $postsRepository, LikesRepository $likesRepository): Response
    {
        $allPostsArray = $postsRepository->findAll();

        $session = $this->requestStack->getSession();
        $userId = $session->has('user_id') ? $session->get('user_id') : null;

        $allPostsArray = array_map(function ($post) use ($likesRepository, $userId) {
            $like = null;
            if ($userId !== null) {
                $like = $likesRepository->findOneBy(['the_post' => $post->getId(), 'the_user' => $userId]);
            }
            return [
                'postId' => $post->getId(),
                'creatorId' => $post->getCreator()->getId(),
                'creatorName' => $post->getCreator()->getUsername(),
                'creationDate' => $post->getCreationDate()->format('Y-m-d H:i:s'),
                'content' => $post->getContent(),
                'tag' => $post->getTag(),
                'isLikedByTheUser' => (bool) $like,
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
        $post->setTag($postTag);

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

    #[Route('/check_like_or_unlike/{id}', name: 'app_check_like_or_unlike', methods: ['POST'])]
    public function checkLikeOrUnlike(int $id, LikesRepository $likesRepository): Response
    {
        $session = $this->requestStack->getSession();
        $userId = $session->get('user_id');

        $like = $likesRepository->findOneBy(['the_post' => $id, 'the_user' => $userId]);

        return new RedirectResponse(
            $this->generateUrl($like ? 'app_unlike_action' : 'app_like_action', ['id' => $id])
        );
    }

    #[Route('/like_action/{id}', name: 'app_like_action', methods: ['GET', 'POST'])]
    public function likeAction(int $id, PostsRepository $postsRepository, UsersRepository $usersRepository, EntityManagerInterface $entityManager): Response
    {
        $session = $this->requestStack->getSession();
        $userId = $session->get('user_id');

        $post = $postsRepository->find($id);
        $user = $usersRepository->find($userId);

        $like = new Likes();
        $like->setThePost($post);
        $like->setTheUser($user);

        $entityManager->persist($like);
        $entityManager->flush();

        $this->addFlash('success', 'Like ajouté avec succès');

        return $this->redirectToRoute('app_main_interface');
    }

    #[Route('/unlike_action/{id}', name: 'app_unlike_action', methods: ['GET', 'POST'])]
    public function unlikeAction(int $id, LikesRepository $likesRepository, EntityManagerInterface $entityManager): Response
    {
        $session = $this->requestStack->getSession();
        $userId = $session->get('user_id');

        $like = $likesRepository->findOneBy(['the_post' => $id, 'the_user' => $userId]);

        $entityManager->remove($like);
        $entityManager->flush();

        $this->addFlash('success', 'Like supprimé avec succès.');

        return $this->redirectToRoute('app_main_interface');
    }

}

