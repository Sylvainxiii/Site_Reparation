<?php

namespace App\Controller;

use App\Entity\FrDomaineDom;
use App\Form\FrDomaineDomType;
use App\Repository\FrDomaineDomRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/fr/domaine/dom')]
class FrDomaineDomController extends AbstractController
{
    #[Route('/', name: 'app_fr_domaine_dom_index', methods: ['GET'])]
    public function index(FrDomaineDomRepository $frDomaineDomRepository): Response
    {
        return $this->render('fr_domaine_dom/index.html.twig', [
            'fr_domaine_doms' => $frDomaineDomRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_fr_domaine_dom_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $frDomaineDom = new FrDomaineDom();
        $form = $this->createForm(FrDomaineDomType::class, $frDomaineDom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($frDomaineDom);
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_domaine_dom_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_domaine_dom/new.html.twig', [
            'fr_domaine_dom' => $frDomaineDom,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_domaine_dom_show', methods: ['GET'])]
    public function show(FrDomaineDom $frDomaineDom): Response
    {
        return $this->render('fr_domaine_dom/show.html.twig', [
            'fr_domaine_dom' => $frDomaineDom,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_fr_domaine_dom_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FrDomaineDom $frDomaineDom, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FrDomaineDomType::class, $frDomaineDom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_domaine_dom_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_domaine_dom/edit.html.twig', [
            'fr_domaine_dom' => $frDomaineDom,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_domaine_dom_delete', methods: ['POST'])]
    public function delete(Request $request, FrDomaineDom $frDomaineDom, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$frDomaineDom->getId(), $request->request->get('_token'))) {
            $entityManager->remove($frDomaineDom);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fr_domaine_dom_index', [], Response::HTTP_SEE_OTHER);
    }
}
