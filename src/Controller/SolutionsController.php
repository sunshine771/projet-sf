<?php

namespace App\Controller;

use App\Entity\Services;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SolutionsController extends AbstractController
{
    #[Route('/solutions', name: 'app_solutions')]
    public function index(EntityManagerInterface $doctrine): Response
    {

        // Récuper les services de la société
        $services = $doctrine->getRepository(Services::class)->findAll();
        // dd($services);
        return $this->render('solutions/index.html.twig', [
            'services' => $services,
        ]);
    }
}
