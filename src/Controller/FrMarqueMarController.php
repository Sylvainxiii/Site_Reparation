<?php

namespace App\Controller;

use App\Entity\FrMarqueMar;
use App\Form\FrMarqueMarType;
use App\Repository\FrMarqueMarRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/fr/marque/mar')]
class FrMarqueMarController extends AbstractController
{
    #[Route('/', name: 'app_fr_marque_mar_index', methods: ['GET'])]
    public function index(FrMarqueMarRepository $frMarqueMarRepository): Response
    {
        return $this->render('fr_marque_mar/index.html.twig', [
            'fr_marque_mars' => $frMarqueMarRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_fr_marque_mar_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $frMarqueMar = new FrMarqueMar();
        $form = $this->createForm(FrMarqueMarType::class, $frMarqueMar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($frMarqueMar);
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_marque_mar_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_marque_mar/new.html.twig', [
            'fr_marque_mar' => $frMarqueMar,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_marque_mar_show', methods: ['GET'])]
    public function show(FrMarqueMar $frMarqueMar): Response
    {
        return $this->render('fr_marque_mar/show.html.twig', [
            'fr_marque_mar' => $frMarqueMar,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_fr_marque_mar_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FrMarqueMar $frMarqueMar, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FrMarqueMarType::class, $frMarqueMar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_marque_mar_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_marque_mar/edit.html.twig', [
            'fr_marque_mar' => $frMarqueMar,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_marque_mar_delete', methods: ['POST'])]
    public function delete(Request $request, FrMarqueMar $frMarqueMar, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$frMarqueMar->getId(), $request->request->get('_token'))) {
            $entityManager->remove($frMarqueMar);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fr_marque_mar_index', [], Response::HTTP_SEE_OTHER);
    }
}
