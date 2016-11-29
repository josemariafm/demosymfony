<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestBundle:Default:index.html.twig');
        
        
    }
    
    public function textoAction($libro)
    {
        return $this->render('TestBundle:Default:texto.html.twig', array('libro' => $libro));
        
        
    }
}
