<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImagesArticlesController extends AbstractController
{
    /**
     * @Route("/images/articles", name="images_articles")
     */
    public function index(): Response
    {
        return $this->render('images_articles/index.html.twig', [
            'controller_name' => 'ImagesArticlesController',
        ]);
    }
}
