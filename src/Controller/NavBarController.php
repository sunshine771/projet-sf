<?php

namespace App\Controller;

use App\Entity\Realisations;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NavBarController extends AbstractController
{
    #[Route('/nav', name: 'app_nav')]
    public function index(EntityManagerInterface $doctrine): Response
    {
        $realisations = $doctrine->getRepository(Realisations::class)->findAll();
        return $this->render('nav/index.html.twig', [
            'realisations' => $realisations,
        ]);
    }
}
