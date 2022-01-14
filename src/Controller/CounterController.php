<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CounterController extends AbstractController
{
    /**
     * @Route ("/counter/{slug}")
     */
    public function counter($slug)
    {
        return $this->render('counter/show.html.twig', [
            'number' => $slug
        ]);
    }

}