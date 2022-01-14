<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddSixController extends AbstractController
{
    /**
     * @Route ("/addsix/{slug}")
     */
    public function addsix($slug)
    {
        return $this->render('addsix/show.html.twig', [
            'number' => $slug
        ]);
    }

}