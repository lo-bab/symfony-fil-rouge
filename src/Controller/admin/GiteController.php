<?php

namespace App\Controller\Admin;

use App\Entity\Gite;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GiteController extends AbstractController
{
    // fonction théorique pour l'appel des données
    // public function show(ManagerRegistry $doctrine, int $id)
    // {
    //     $repository = $doctrine->getRepository(Gite::class);
        
    //     $gite = $repository->find($id);
        
    //     return $this->render('gite/show.html.twig', [
    //         "title" => "Affichage du gite",
    //         "gite" => $gite
    //     ]);
    // }
    // la fonction suivante peut être écrite grace aux automatismes de symfony
    
    /**
     * @Route("/gite/{id}", name="gite_show")
     */
    public function show(Gite $gite)
    {
        return $this->render('gite/show.html.twig', [
            "title" => "Affichage du gite",
            "gite" => $gite
        ]);
    }
    
}