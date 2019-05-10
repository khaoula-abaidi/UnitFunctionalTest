<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(TranslatorInterface $translator)
    {
        $me = 'mes salutations test';
        $translated = $translator->trans('Symfony is great');
        return $this->render('home/index.html.twig', [
            'me' => $me,
            'translated' => $translated
        ]);
    }
}
