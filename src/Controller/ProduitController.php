<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit/add", name="produit.add")
     */
    public function add(): Response
    {   
        //créer l'objet
        $produit=new Produit();
        // remplir l'objet
        $produit->setName("tomate");
        $produit->setPrice(2000);
        $produit->setQuantity(20);
        // enregistrer l'objet dans la base
        $entityManager=$this->getDoctrine()->getManager();
        $entityManager->persist($produit);
        $entityManager->flush();
        
        return $this->render('produit/add.html.twig', [
            'produit' => $produit,
        ]);
    }
}
