<?php

namespace App\Controller;

use App\Repository\LikesRepository;
use App\Repository\PostsRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainInterfaceController extends AbstractController
{
    #[Route('/', name: 'app_main_interface')]
    public function index(PostsRepository $postsRepository): Response
    {
        $allPostsArray = $postsRepository->findAll();

        $allPostsArray = array_map(function ($post) {
            $creator = $post->getCreator();
            return [
                'creatorName' => $creator->getName(),
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
}

