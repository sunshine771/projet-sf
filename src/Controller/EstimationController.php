<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EstimationController extends AbstractController
{
    #[Route('/estimation', name: 'app_estimation')]
    public function index(): Response
    {
        return $this->render('estimation/index.html.twig', [
            'controller_name' => 'EstimationController',
        ]);
    }
}
