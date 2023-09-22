<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefiController extends AbstractController
{
    #[Route('/defi', name: 'app_defi')]
    public function index(): Response
    {
        return $this->render('defi/index.html.twig', [
            'controller_name' => 'DefiController',
        ]);
    }
}
