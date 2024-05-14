<?php

namespace App\Controller;

use App\Entity\FrPiecesDetacheesPid;
use App\Form\FrPiecesDetacheesPidType;
use App\Repository\FrPiecesDetacheesPidRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/fr/pieces/detachees/pid')]
class FrPiecesDetacheesPidController extends AbstractController
{
    #[Route('/', name: 'app_fr_pieces_detachees_pid_index', methods: ['GET'])]
    public function index(FrPiecesDetacheesPidRepository $frPiecesDetacheesPidRepository): Response
    {
        return $this->render('fr_pieces_detachees_pid/index.html.twig', [
            'fr_pieces_detachees_pids' => $frPiecesDetacheesPidRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_fr_pieces_detachees_pid_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $frPiecesDetacheesPid = new FrPiecesDetacheesPid();
        $form = $this->createForm(FrPiecesDetacheesPidType::class, $frPiecesDetacheesPid);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($frPiecesDetacheesPid);
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_pieces_detachees_pid_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_pieces_detachees_pid/new.html.twig', [
            'fr_pieces_detachees_pid' => $frPiecesDetacheesPid,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_pieces_detachees_pid_show', methods: ['GET'])]
    public function show(FrPiecesDetacheesPid $frPiecesDetacheesPid): Response
    {
        return $this->render('fr_pieces_detachees_pid/show.html.twig', [
            'fr_pieces_detachees_pid' => $frPiecesDetacheesPid,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_fr_pieces_detachees_pid_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FrPiecesDetacheesPid $frPiecesDetacheesPid, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FrPiecesDetacheesPidType::class, $frPiecesDetacheesPid);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_pieces_detachees_pid_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_pieces_detachees_pid/edit.html.twig', [
            'fr_pieces_detachees_pid' => $frPiecesDetacheesPid,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_pieces_detachees_pid_delete', methods: ['POST'])]
    public function delete(Request $request, FrPiecesDetacheesPid $frPiecesDetacheesPid, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$frPiecesDetacheesPid->getId(), $request->request->get('_token'))) {
            $entityManager->remove($frPiecesDetacheesPid);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fr_pieces_detachees_pid_index', [], Response::HTTP_SEE_OTHER);
    }
}
