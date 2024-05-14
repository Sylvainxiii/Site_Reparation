<?php

namespace App\Controller;

use App\Entity\FrUtilisateurUti;
use App\Form\FrUtilisateurUtiType;
use App\Repository\FrUtilisateurUtiRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/fr/utilisateur/uti')]
class FrUtilisateurUtiController extends AbstractController
{
    #[Route('/', name: 'app_fr_utilisateur_uti_index', methods: ['GET'])]
    public function index(FrUtilisateurUtiRepository $frUtilisateurUtiRepository): Response
    {
        return $this->render('fr_utilisateur_uti/index.html.twig', [
            'fr_utilisateur_utis' => $frUtilisateurUtiRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_fr_utilisateur_uti_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $frUtilisateurUti = new FrUtilisateurUti();
        $form = $this->createForm(FrUtilisateurUtiType::class, $frUtilisateurUti);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($frUtilisateurUti);
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_utilisateur_uti_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_utilisateur_uti/new.html.twig', [
            'fr_utilisateur_uti' => $frUtilisateurUti,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_utilisateur_uti_show', methods: ['GET'])]
    public function show(FrUtilisateurUti $frUtilisateurUti): Response
    {
        return $this->render('fr_utilisateur_uti/show.html.twig', [
            'fr_utilisateur_uti' => $frUtilisateurUti,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_fr_utilisateur_uti_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FrUtilisateurUti $frUtilisateurUti, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FrUtilisateurUtiType::class, $frUtilisateurUti);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_utilisateur_uti_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_utilisateur_uti/edit.html.twig', [
            'fr_utilisateur_uti' => $frUtilisateurUti,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_utilisateur_uti_delete', methods: ['POST'])]
    public function delete(Request $request, FrUtilisateurUti $frUtilisateurUti, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$frUtilisateurUti->getId(), $request->request->get('_token'))) {
            $entityManager->remove($frUtilisateurUti);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fr_utilisateur_uti_index', [], Response::HTTP_SEE_OTHER);
    }
}
