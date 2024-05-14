<?php

namespace App\Controller;

use App\Entity\FrCategorieCat;
use App\Form\FrCategorieCatType;
use App\Repository\FrCategorieCatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/fr/categorie/cat')]
class FrCategorieCatController extends AbstractController
{
    #[Route('/', name: 'app_fr_categorie_cat_index', methods: ['GET'])]
    public function index(FrCategorieCatRepository $frCategorieCatRepository): Response
    {
        return $this->render('fr_categorie_cat/index.html.twig', [
            'fr_categorie_cats' => $frCategorieCatRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_fr_categorie_cat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $frCategorieCat = new FrCategorieCat();
        $form = $this->createForm(FrCategorieCatType::class, $frCategorieCat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($frCategorieCat);
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_categorie_cat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_categorie_cat/new.html.twig', [
            'fr_categorie_cat' => $frCategorieCat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_categorie_cat_show', methods: ['GET'])]
    public function show(FrCategorieCat $frCategorieCat): Response
    {
        return $this->render('fr_categorie_cat/show.html.twig', [
            'fr_categorie_cat' => $frCategorieCat,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_fr_categorie_cat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FrCategorieCat $frCategorieCat, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FrCategorieCatType::class, $frCategorieCat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_categorie_cat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_categorie_cat/edit.html.twig', [
            'fr_categorie_cat' => $frCategorieCat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_categorie_cat_delete', methods: ['POST'])]
    public function delete(Request $request, FrCategorieCat $frCategorieCat, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$frCategorieCat->getId(), $request->request->get('_token'))) {
            $entityManager->remove($frCategorieCat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fr_categorie_cat_index', [], Response::HTTP_SEE_OTHER);
    }
}
