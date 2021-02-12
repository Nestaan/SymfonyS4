<?php
namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TimeController extends AbstractController
{
    /**
     * @Route("/time/now", name="app_time_now")
     */
    public function now()
    {
        $now = new DateTime('now');
        return $this->render('time/now.html.twig', array(
            'time' => $now->format('g:i:s A'),
        ));
    }
}