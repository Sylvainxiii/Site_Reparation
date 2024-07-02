<?php

namespace App\Controller;

use App\Repository\FrCategorieCatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(FrCategorieCatRepository $frCategorieCatRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'fr_categorie_cats' => $frCategorieCatRepository->findAll(),
        ]);
    }
}
