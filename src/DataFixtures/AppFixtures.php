<?php

namespace App\DataFixtures;

use App\Entity\Likes;
use App\Entity\Posts;
use App\Entity\Reports;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    function generateSecurePassword($length = 8): string {
        if ($length < 8) {
            $length = 8;
        }

        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $digits = '0123456789';
        $specialChars = '{}()%&-_!?.';

        $password = '';
        $password .= $lowercase[random_int(0, strlen($lowercase) - 1)];
        $password .= $uppercase[random_int(0, strlen($uppercase) - 1)];
        $password .= $digits[random_int(0, strlen($digits) - 1)];
        $password .= $specialChars[random_int(0, strlen($specialChars) - 1)];

        $allChars = $lowercase . $uppercase . $digits . $specialChars;

        for ($i = 4; $i < $length; $i++) {
            $password .= $allChars[random_int(0, strlen($allChars) - 1)];
        }

        $password = str_shuffle($password);

        return $password;
    }

    public function load(ObjectManager $manager): void
    {
        $usersArray = [];
        for ($i = 1; $i <= 20; $i++) {
            $domains = ['gmail.com', 'mail.com', 'outlook.com'];
            $randomDomain = $domains[array_rand($domains)];
            if ($i == 1 || $i == 2) {
                $isAdminValue = ['ROLE_ADMIN', 'ROLE_USER'];
            }
            else {
                $isAdminValue = ['ROLE_USER'];
            }

            $users = new Users();
            $users->setUsername('user'.$i);
            $users->setMailAddress('test'.$i.'@'.$randomDomain);
            $users->setRoles($isAdminValue);
            $users->setPassword($this->generateSecurePassword());
            $usersArray[] = $users;
            $manager->persist($users);
            $manager->flush();
        }

        $postsArray = [];
        for ($i = 1; $i <= 50; $i++) {
            $tags = ['foot', 'bière', 'France', 'USA', 'guerre', 'musique', 'femmes', 'mode'];
            $randomTag = $tags[array_rand($tags)];

            $posts = new Posts();
            $posts->setCreator($usersArray[array_rand($usersArray)]);
            $posts->setCreationDate(new \DateTime());
            $posts->setContent("Lorem ipsum $i");
            $posts->setTag($randomTag);
            $postsArray[] = $posts;
            $manager->persist($posts);
            $manager->flush();
        }

        for ($i = 1; $i <= 80; $i++) {
            $likes = new Likes();
            $likes->setThePost($postsArray[array_rand($postsArray)]);
            $likes->setTheUser($usersArray[array_rand($usersArray)]);
            $manager->persist($likes);
            $manager->flush();
        }

        for ($i = 1; $i <= 7; $i++) {
            $reports = new Reports();
            $reports->setReportedPost($postsArray[array_rand($postsArray)]);
            $reports->setReporter($usersArray[array_rand($usersArray)]);
            $manager->persist($reports);
            $manager->flush();
        }
    }
}

