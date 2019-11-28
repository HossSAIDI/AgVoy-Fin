<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Room;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservation")
 */
class ReservationController extends AbstractController
{
    /**
     * @Route("/", name="reservation_index", methods={"GET"})
     */
    public function index(ReservationRepository $reservationRepository): Response
    {
        $user = $this->getUser();
        $client = $user->getClients();
        if (!$client){
            throw $this->createAccessDeniedException();
        }

        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservationRepository->findByClient($client),
        ]);
    }

    /**
     * @Route("/new/{id}", requirements={"id": "\d+"}, name="reservation_new", methods={"GET","POST"})
     */
    public function new(Request $request, Room $room): Response
    {
        $reservation = new Reservation();
        $reservation->setConfirmed(true);

        $user = $this->getUser();
        $client = $user->getClients();

        if(!$client) {
            throw $this->createAccessDeniedException();
        }
        $reservation->setClient($client);

        $reservation->setRoom($room);
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $reservations = $entityManager->getRepository(Reservation::class);
            $possible = $reservations->createQueryBuilder("reservation")
                ->where("reservation.room = :room AND NOT (:endDate < reservation.beginDate OR :beginDate > reservation.endDate OR reservation.endDate < :beginDate OR reservation.beginDate > :endDate)")
                ->setParameter("beginDate", $reservation->getBeginDate())
                ->setParameter("endDate", $reservation->getEndDate())
                ->setParameter("room", $room)
                ->getQuery()->getResult();
            ;
            if(count($possible) == 0) {
                $entityManager->persist($reservation);
                $entityManager->flush();
            }
            else {
                $this->addFlash("error", "Ces dates sont indisponibles");
            }

            return $this->redirectToRoute('room_show', array('id'=>$room->getId()));
        }

        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
            'room' => $room
        ]);
    }

    /**
     * @Route("/{id}", name="reservation_show", methods={"GET"})
     */
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reservation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reservation $reservation): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservation_index');
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Reservation $reservation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservation_index');
    }
}
