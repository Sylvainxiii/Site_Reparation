<?php

namespace App\Controller;

use App\Entity\FrOutilsOut;
use App\Form\FrOutilsOutType;
use App\Repository\FrOutilsOutRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/fr/outils/out')]
class FrOutilsOutController extends AbstractController
{
    #[Route('/', name: 'app_fr_outils_out_index', methods: ['GET'])]
    public function index(FrOutilsOutRepository $frOutilsOutRepository): Response
    {
        return $this->render('fr_outils_out/index.html.twig', [
            'fr_outils_outs' => $frOutilsOutRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_fr_outils_out_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $frOutilsOut = new FrOutilsOut();
        $form = $this->createForm(FrOutilsOutType::class, $frOutilsOut);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($frOutilsOut);
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_outils_out_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_outils_out/new.html.twig', [
            'fr_outils_out' => $frOutilsOut,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_outils_out_show', methods: ['GET'])]
    public function show(FrOutilsOut $frOutilsOut): Response
    {
        return $this->render('fr_outils_out/show.html.twig', [
            'fr_outils_out' => $frOutilsOut,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_fr_outils_out_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FrOutilsOut $frOutilsOut, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FrOutilsOutType::class, $frOutilsOut);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_outils_out_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_outils_out/edit.html.twig', [
            'fr_outils_out' => $frOutilsOut,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_outils_out_delete', methods: ['POST'])]
    public function delete(Request $request, FrOutilsOut $frOutilsOut, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$frOutilsOut->getId(), $request->request->get('_token'))) {
            $entityManager->remove($frOutilsOut);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fr_outils_out_index', [], Response::HTTP_SEE_OTHER);
    }
}
