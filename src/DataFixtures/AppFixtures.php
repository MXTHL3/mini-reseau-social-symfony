<?php

namespace App\DataFixtures;

use App\Entity\Likes;
use App\Entity\Posts;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $usersArray = [];
        for ($i = 1; $i <= 10; $i++) {
            $users = new Users();
            $users->setName('test');
            $users->setMailAddress('test'.$i.'@test.com');
            $users->setPwd('mypwd');
            $usersArray[] = $users;
            $manager->persist($users);
            $manager->flush();
        }

        $postsArray = [];
        for ($i = 1; $i <= 10; $i++) {
            $posts = new Posts();
            $posts->setCreator($usersArray[array_rand($usersArray)]);
            $posts->setCreationDate(new \DateTime());
            $posts->setContent("Lorem ipsum $i");
            $postsArray[] = $posts;
            $manager->persist($posts);
            $manager->flush();
        }

        for ($i = 1; $i <= 20; $i++) {
            $likes = new Likes();
            $likes->setThePost($postsArray[array_rand($postsArray)]);
            $likes->setTheUser($usersArray[array_rand($usersArray)]);
            $manager->persist($likes);
            $manager->flush();
        }
    }
}

