<?php

namespace App\Controller;

use App\Entity\Services;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServicesController extends AbstractController
{
    #[Route('/services', name: 'app_services')]
    public function index(): Response
    {
        return $this->render('services/index.html.twig', [
            'controller_name' => 'ServicesController',
        ]);
    }

    #[Route('/services/{id}', name: 'app_services_details')]
    public function getDetails(EntityManagerInterface $doctrine, String $id): Response
    {
        $service = $doctrine->getRepository(Services::class)->findBy(['id' => $id])[0]; // je récupère un service
        return $this->render('services/details.html.twig', [
            'service' => $service,
        ]);
    }
}
