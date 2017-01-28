<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminLTEController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function indexAction(Request $request)
    {
        //nombreBundle:carpeta:template
        return $this->render('AppBundle:default:index.html.twig');

    }
    /**
     * @Route("/calendar", name="calendar")
     */
    public function calendarAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:default:calendar.html.twig');
    }
}
