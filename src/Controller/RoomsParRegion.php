<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Region;
use App\Form\RegionType;
use App\Repository\RegionRepository;

/**
 * @Route("/roomsregion")
 */

class RoomsParRegion extends AbstractController
{
   
    /**
     * @Route("/", name="liste_region")
     */
    public function index(RegionRepository $regionRepository)
    {
        return $this->render('room_par_region/index.html.twig', [
            'regions' => $regionRepository->findAll(),
        ]);
    }
    /**
     * @Route("/{id}", name="rooms_par_region", methods={"GET"})
     */
    public function show(Region $region)
    {
        return $this->render('room_par_region/show.html.twig', [
            'region' => $region,
        ]);
    }
    

}
