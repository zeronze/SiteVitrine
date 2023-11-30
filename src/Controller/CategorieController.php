<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    #[Route('/categorie', name: 'app_all_categorie')]
    public function index(): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }

    #[Route('/categorie/isolation', name: 'app_categorie_isolation')]
    public function isolation(): Response
    {
        return $this->render('categorie/isolation.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }


    #[Route('/categorie/menuiserie', name: 'app_categorie_menuiserie')]
    public function menuiserie(): Response
    {
        return $this->render('categorie/menuiserie.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }

    #[Route('/categorie/domotique', name: 'app_categorie_domotique')]
    public function domotique(): Response
    {
        return $this->render('categorie/domotique.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }


    #[Route('/categorie/agencement', name: 'app_categorie_agencement')]
    public function agencement(): Response
    {
        return $this->render('categorie/agencement.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }
}
