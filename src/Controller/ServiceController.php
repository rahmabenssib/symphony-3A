<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('/service/{name}', name: 'show_service')]
    public function showService($name): Response
    {
        return $this->render('service/showService.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/goToIndex', name: 'go_to_index')]
    public function goToIndex(): Response
    {
        // redirection vers la méthode index() du HomeController
        return $this->redirectToRoute('app_home');
    }
}
