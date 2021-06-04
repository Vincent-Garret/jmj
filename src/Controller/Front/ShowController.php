<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShowController extends AbstractController
{
    /**
     * @Route("", name="home")
     */
    public function home(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('Front/home.html.twig');
    }
}