<?php

namespace App\Controller;

use App\Entity\FrInterventionInt;
use App\Form\FrInterventionIntType;
use App\Repository\FrInterventionIntRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/fr/intervention/int')]
class FrInterventionIntController extends AbstractController
{
    #[Route('/', name: 'app_fr_intervention_int_index', methods: ['GET'])]
    public function index(FrInterventionIntRepository $frInterventionIntRepository): Response
    {
        return $this->render('fr_intervention_int/index.html.twig', [
            'fr_intervention_ints' => $frInterventionIntRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_fr_intervention_int_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $frInterventionInt = new FrInterventionInt();
        $form = $this->createForm(FrInterventionIntType::class, $frInterventionInt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($frInterventionInt);
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_intervention_int_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_intervention_int/new.html.twig', [
            'fr_intervention_int' => $frInterventionInt,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_intervention_int_show', methods: ['GET'])]
    public function show(FrInterventionInt $frInterventionInt): Response
    {
        return $this->render('fr_intervention_int/show.html.twig', [
            'fr_intervention_int' => $frInterventionInt,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_fr_intervention_int_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FrInterventionInt $frInterventionInt, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FrInterventionIntType::class, $frInterventionInt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_intervention_int_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_intervention_int/edit.html.twig', [
            'fr_intervention_int' => $frInterventionInt,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_intervention_int_delete', methods: ['POST'])]
    public function delete(Request $request, FrInterventionInt $frInterventionInt, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$frInterventionInt->getId(), $request->request->get('_token'))) {
            $entityManager->remove($frInterventionInt);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fr_intervention_int_index', [], Response::HTTP_SEE_OTHER);
    }
}
