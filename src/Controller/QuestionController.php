<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/question/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            'Have you asked Google? Try www.google.com/search?q=' . str_replace('-','+',$slug),
            'Ask a friend. If you have any.',
            'Did you know that giving up is always an option? Why not try it now!'
        ];

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);

        // return new Response(sprintf(
        //     'Slugfest: "%s"', 
        //     ucwords(str_replace('-',' ',$slug))
        // ));
    }
}