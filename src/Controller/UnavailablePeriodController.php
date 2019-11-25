<?php

namespace App\Controller;

use App\Entity\UnavailablePeriod;
use App\Form\UnavailablePeriodType;
use App\Repository\UnavailablePeriodRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/unavailable/period")
 */
class UnavailablePeriodController extends AbstractController
{
    /**
     * @Route("/", name="unavailable_period_index", methods={"GET"})
     */
    public function index(UnavailablePeriodRepository $unavailablePeriodRepository): Response
    {
        return $this->render('unavailable_period/index.html.twig', [
            'unavailable_periods' => $unavailablePeriodRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="unavailable_period_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $unavailablePeriod = new UnavailablePeriod();
        $form = $this->createForm(UnavailablePeriodType::class, $unavailablePeriod);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($unavailablePeriod);
            $entityManager->flush();

            return $this->redirectToRoute('unavailable_period_index');
        }

        return $this->render('unavailable_period/new.html.twig', [
            'unavailable_period' => $unavailablePeriod,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="unavailable_period_show", methods={"GET"})
     */
    public function show(UnavailablePeriod $unavailablePeriod): Response
    {
        return $this->render('unavailable_period/show.html.twig', [
            'unavailable_period' => $unavailablePeriod,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="unavailable_period_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, UnavailablePeriod $unavailablePeriod): Response
    {
        $form = $this->createForm(UnavailablePeriodType::class, $unavailablePeriod);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('unavailable_period_index');
        }

        return $this->render('unavailable_period/edit.html.twig', [
            'unavailable_period' => $unavailablePeriod,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="unavailable_period_delete", methods={"DELETE"})
     */
    public function delete(Request $request, UnavailablePeriod $unavailablePeriod): Response
    {
        if ($this->isCsrfTokenValid('delete'.$unavailablePeriod->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($unavailablePeriod);
            $entityManager->flush();
        }

        return $this->redirectToRoute('unavailable_period_index');
    }
}
