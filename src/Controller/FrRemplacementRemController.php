<?php

namespace App\Controller;

use App\Entity\FrRemplacementRem;
use App\Form\FrRemplacementRemType;
use App\Repository\FrRemplacementRemRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/fr/remplacement/rem')]
class FrRemplacementRemController extends AbstractController
{
    #[Route('/', name: 'app_fr_remplacement_rem_index', methods: ['GET'])]
    public function index(FrRemplacementRemRepository $frRemplacementRemRepository): Response
    {
        return $this->render('fr_remplacement_rem/index.html.twig', [
            'fr_remplacement_rems' => $frRemplacementRemRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_fr_remplacement_rem_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $frRemplacementRem = new FrRemplacementRem();
        $form = $this->createForm(FrRemplacementRemType::class, $frRemplacementRem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($frRemplacementRem);
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_remplacement_rem_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_remplacement_rem/new.html.twig', [
            'fr_remplacement_rem' => $frRemplacementRem,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_remplacement_rem_show', methods: ['GET'])]
    public function show(FrRemplacementRem $frRemplacementRem): Response
    {
        return $this->render('fr_remplacement_rem/show.html.twig', [
            'fr_remplacement_rem' => $frRemplacementRem,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_fr_remplacement_rem_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FrRemplacementRem $frRemplacementRem, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FrRemplacementRemType::class, $frRemplacementRem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_remplacement_rem_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_remplacement_rem/edit.html.twig', [
            'fr_remplacement_rem' => $frRemplacementRem,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_remplacement_rem_delete', methods: ['POST'])]
    public function delete(Request $request, FrRemplacementRem $frRemplacementRem, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$frRemplacementRem->getId(), $request->request->get('_token'))) {
            $entityManager->remove($frRemplacementRem);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fr_remplacement_rem_index', [], Response::HTTP_SEE_OTHER);
    }
}
