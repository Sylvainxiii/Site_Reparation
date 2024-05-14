<?php

namespace App\Controller;

use App\Entity\FrObjetObj;
use App\Form\FrObjetObjType;
use App\Repository\FrObjetObjRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/fr/objet/obj')]
class FrObjetObjController extends AbstractController
{
    #[Route('/', name: 'app_fr_objet_obj_index', methods: ['GET'])]
    public function index(FrObjetObjRepository $frObjetObjRepository): Response
    {
        return $this->render('fr_objet_obj/index.html.twig', [
            'fr_objet_objs' => $frObjetObjRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_fr_objet_obj_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $frObjetObj = new FrObjetObj();
        $form = $this->createForm(FrObjetObjType::class, $frObjetObj);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($frObjetObj);
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_objet_obj_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_objet_obj/new.html.twig', [
            'fr_objet_obj' => $frObjetObj,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_objet_obj_show', methods: ['GET'])]
    public function show(FrObjetObj $frObjetObj): Response
    {
        return $this->render('fr_objet_obj/show.html.twig', [
            'fr_objet_obj' => $frObjetObj,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_fr_objet_obj_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FrObjetObj $frObjetObj, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FrObjetObjType::class, $frObjetObj);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_fr_objet_obj_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fr_objet_obj/edit.html.twig', [
            'fr_objet_obj' => $frObjetObj,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fr_objet_obj_delete', methods: ['POST'])]
    public function delete(Request $request, FrObjetObj $frObjetObj, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$frObjetObj->getId(), $request->request->get('_token'))) {
            $entityManager->remove($frObjetObj);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fr_objet_obj_index', [], Response::HTTP_SEE_OTHER);
    }
}
