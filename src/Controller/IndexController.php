<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controleur de la page d'accueil
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/", name = "home", methods="GET")
     */
    public function indexAction()
    {
        return $this->render('/home/home.html.twig',array(
            'welcome' => "Bonne utilisation de la todo list")
            );
    }
}

/*return $this->redirectToRoute('app_register');
}*/