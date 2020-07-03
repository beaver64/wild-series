<?php

// src/Controller/WildController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/wild", name="wild")
 */
Class WildController extends AbstractController
{
    /**
     * @Route("/", name="wild_index")
     */
    public function index()
    {
        return $this->render('Wild/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }
    /**
     * @Route("/show/{title}", name="wild_show", requirements={"title"="[a-z0-9/-]+"}, defaults={"title"=null})
     */
    public function show(?string $title)
    {
        if ($title === null){
            $title ="Aucune série sélectionnée, veuillez choisir une série";
        }
        return $this->render("Wild/show.html.twig", [
            "title"=>$title,
        ]);
    }
}