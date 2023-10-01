<?php

namespace App\Controller;

use App\Entity\Realisations;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RealisationsController extends AbstractController
{
    #[Route('/realisations', name: 'app_realisations')]
    public function index(): Response
    {
        return $this->render('realisations/index.html.twig', [
            'controller_name' => 'RealisationsController',
        ]);
    }

    #[Route('/realisations/{id}', name: 'app_realisations_details')]
    public function getDetails(EntityManagerInterface $doctrine, String $id): Response
    {
        $realisation = $doctrine->getRepository(Realisations::class)->find($id);
        return $this->render('realisations/details.html.twig', [
            'realisation' => $realisation,
        ]);
    }

    // example de route pour faire variabiliser les img in Realisations
    // pour ça il faut mettre les images dans la bdd pour chaque real et apres 
    //le site pourra afficher chaque image 
    // 

    // #[Route('/realisations', name: 'app_realisations')]
    // public function index(): Response
    // {
    //     return $this->render('realisations/index.html.twig', [
    //         'controller_name' => 'RealisationsController',
    //     ]);
    // }
}
