<?php

namespace App\Controller;

use App\Entity\FrSousCategoriSca;
use App\Form\FrSousCategoriScaType;
use App\Repository\FrSousCategoriScaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/fr/sous/categori/sca')]
class FrSousCategoriScaController extends AbstractController
{
    #[Route('/', name: 'app_fr_sous_categori_sca_index', methods: ['GET'])]
    public function index(FrSousCategoriScaRepository $frSousCategoriScaRepository): Response
    {
        return $this->render('fr_sous_categori_sca/index.html.twig', [
            'fr_sous_categori_scas' => $frSousCategoriScaRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_fr_sous_categori_sca_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $frSousCategoriSca = new FrSousCategoriSca();
        $form = $this->createForm(FrSousCategoriScaType::class, $frSousCategoriSca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($frSousCategoriSca);
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_sous_categori_sca_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_sous_categori_sca/new.html.twig', [
            'fr_sous_categori_sca' => $frSousCategoriSca,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_sous_categori_sca_show', methods: ['GET'])]
    public function show(FrSousCategoriSca $frSousCategoriSca): Response
    {
        return $this->render('fr_sous_categori_sca/show.html.twig', [
            'fr_sous_categori_sca' => $frSousCategoriSca,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_fr_sous_categori_sca_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FrSousCategoriSca $frSousCategoriSca, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FrSousCategoriScaType::class, $frSousCategoriSca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_sous_categori_sca_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_sous_categori_sca/edit.html.twig', [
            'fr_sous_categori_sca' => $frSousCategoriSca,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_sous_categori_sca_delete', methods: ['POST'])]
    public function delete(Request $request, FrSousCategoriSca $frSousCategoriSca, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$frSousCategoriSca->getId(), $request->request->get('_token'))) {
            $entityManager->remove($frSousCategoriSca);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fr_sous_categori_sca_index', [], Response::HTTP_SEE_OTHER);
    }
}
