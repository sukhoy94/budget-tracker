<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApplicationStatusController extends AbstractController
{
    #[Route('/application/status', name: 'app_application_status')]
    public function index(): Response
    {       
        return $this->render('application_status/index.html.twig', [
            'is_db_connected' => $this->isDbConnection(),
        ]);
    }
    
    private function isDbConnection(): bool
    {
        $em = $this->getDoctrine()->getManager();
        $em->getConnection()->connect();
        return $em->getConnection()->isConnected();
    }
}
