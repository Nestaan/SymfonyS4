<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ColorController extends AbstractController
{
    /**
     * @Route("/color/{color}", name="app_color", defaults={"color"="blue"})
     */
    public function color($color)
    {
        return $this->render('color/color.html.twig', array(
            'color' => $color,
        ));
    }
}