<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SolutionsController extends AbstractController
{
    #[Route('/solutions', name: 'app_solutions')]
    public function index(): Response
    {
        return $this->render('solutions/index.html.twig', [
            'controller_name' => 'SolutionsController',
        ]);
    }
}
