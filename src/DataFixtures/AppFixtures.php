<?php

namespace App\DataFixtures;

use App\Entity\FrUtilisateurUti;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    protected $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new FrUtilisateurUti();
        $user->setUtiNom('LACROIX');
        $user->setUtiPrenom('Sylvain');
        $user->setEmail('sylvainlacroix@protonmail.com');
        $encoded = $this->encoder->hashPassword($user, 'Trivisy81330');
        $user->setPassword($encoded);
        $user->setRoles(['ROLE_ADMIN']);

        $manager->persist($user);

        $manager->flush();
    }
}
