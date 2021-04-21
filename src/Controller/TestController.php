<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index(): Response
    {
       
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/test2", name="test2")
     */
    public function index2(): Response
    {
        return $this->render('test/test2.html.twig', [
            'controller_name' => 'Test2',
        ]);
    }
    /**
     * @Route("/test3", name="test3")
     */
    public function index3(): Response
    {
      
        $liste=['ali','samah','azza','Eya','hamdi'];
      
      
        $rep = $this->render('test/index.html.twig', [
            'tab' => $liste,
        ]) ;
        return $rep;  
    }
    /**
     * @Route("/test4", name="test4")
     */
    public function test4(): Response
    {

        $liste = ['ali', 'samah', 'azza', 'Eya', 'hamdi'];


        
        return $this->render('test/test4.html.twig', [
            'tab' => $liste,
        ]);
    }
}