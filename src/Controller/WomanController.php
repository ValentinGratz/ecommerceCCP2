<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WomanController extends AbstractController
{
    /**
     * @Route("/women", name="women")
     */
    public function index(): Response
    {
        return $this->render('women/index.html.twig', [
            'controller_name' => 'WomanController',
        ]);
    }
}
