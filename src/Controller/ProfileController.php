<?php

namespace App\Controller;

use App\Repository\PostsRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProfileController extends AbstractController
{
    #[Route('/profile={id}', name: 'app_profile_page')]
    public function profilePage(int $id, PostsRepository $postsRepository, UsersRepository $usersRepository): Response
    {
        $userSPostsArray = $postsRepository->findBy(['creator' => $usersRepository->find($id)]);

        $userSPostsArray = array_map(function ($post) {
            return [
                'postId' => $post->getId(),
                'creatorId' =>$post->getCreator()->getId(),
                'creationDate' => $post->getCreationDate()->format('Y-m-d H:i:s'),
                'content' => $post->getContent(),
            ];
        }, $userSPostsArray);
        $userSPostsArray = array_reverse($userSPostsArray);

        return $this->render('profile/index.html.twig', [
            'controller_name' => 'MainInterfaceController',
            'posts' => $userSPostsArray
        ]);
    }
}
