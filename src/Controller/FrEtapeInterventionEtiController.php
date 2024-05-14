<?php

namespace App\Controller;

use App\Entity\FrEtapeInterventionEti;
use App\Form\FrEtapeInterventionEtiType;
use App\Repository\FrEtapeInterventionEtiRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/fr/etape/intervention/eti')]
class FrEtapeInterventionEtiController extends AbstractController
{
    #[Route('/', name: 'app_fr_etape_intervention_eti_index', methods: ['GET'])]
    public function index(FrEtapeInterventionEtiRepository $frEtapeInterventionEtiRepository): Response
    {
        return $this->render('fr_etape_intervention_eti/index.html.twig', [
            'fr_etape_intervention_etis' => $frEtapeInterventionEtiRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_fr_etape_intervention_eti_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $frEtapeInterventionEti = new FrEtapeInterventionEti();
        $form = $this->createForm(FrEtapeInterventionEtiType::class, $frEtapeInterventionEti);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($frEtapeInterventionEti);
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_etape_intervention_eti_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_etape_intervention_eti/new.html.twig', [
            'fr_etape_intervention_eti' => $frEtapeInterventionEti,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_etape_intervention_eti_show', methods: ['GET'])]
    public function show(FrEtapeInterventionEti $frEtapeInterventionEti): Response
    {
        return $this->render('fr_etape_intervention_eti/show.html.twig', [
            'fr_etape_intervention_eti' => $frEtapeInterventionEti,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_fr_etape_intervention_eti_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FrEtapeInterventionEti $frEtapeInterventionEti, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FrEtapeInterventionEtiType::class, $frEtapeInterventionEti);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_etape_intervention_eti_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_etape_intervention_eti/edit.html.twig', [
            'fr_etape_intervention_eti' => $frEtapeInterventionEti,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_etape_intervention_eti_delete', methods: ['POST'])]
    public function delete(Request $request, FrEtapeInterventionEti $frEtapeInterventionEti, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$frEtapeInterventionEti->getId(), $request->request->get('_token'))) {
            $entityManager->remove($frEtapeInterventionEti);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fr_etape_intervention_eti_index', [], Response::HTTP_SEE_OTHER);
    }
}
