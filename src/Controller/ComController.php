<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('com/index.html.twig', [
        ]);
    }

    #[Route('/aj-prod', name: 'app_produit')]
    public function produit(): Response
    {
        return $this->render('com/produit.html.twig', [
        ]);
    }
}
