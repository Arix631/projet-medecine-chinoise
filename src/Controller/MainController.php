<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MainController extends AbstractController
{
    #[Route('/', name: 'main_index')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', []);
    }

    #[Route('/histoire', name: 'main_histoire')]
    public function histoire(): Response
    {
        return $this->render('main/histoire.html.twig', []);
    }
    
    #[Route('/medecine', name: 'main_medecine')]
    public function medecine(): Response
    {
        return $this->render('main/medecine.html.twig', []);
    }
}
