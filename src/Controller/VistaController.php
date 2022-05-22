<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VistaController extends AbstractController
{
    /**
     * @Route("/vista", name="app_vista")
     */
    public function index(): Response
    {
        return $this->render('vista/index.html.twig', [
            'controller_name' => 'VistaController',
        ]);
    }
}
