<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelpController extends AbstractController
{
    /**
     * @Route("/help", name="help")
     */
    public function index(): Response
    {
        return $this->render('help/index.html.twig', [
            'controller_name' => 'HelpController',
        ]);
    }
}
