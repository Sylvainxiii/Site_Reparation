<?php

namespace App\DataFixtures;

use App\Entity\FrUtilisateurUti;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new FrUtilisateurUti();
        $user->setUtiNom('LACROIX');
        $user->setUtiPrenom('Sylvain');
        $user->setEmail('sylvainlacroix@protonmail.com');

        $manager->persist($user);

        $manager->flush();
    }
}
