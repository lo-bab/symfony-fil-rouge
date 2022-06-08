<?php

namespace App\Controller;

use App\Entity\Gite;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @route("/", name="home_index")
     */
    public function index(ManagerRegistry $doctrine)
    {
        $repository = $doctrine->getRepository(Gite::class);
        
        $gites = $repository->findAll();
        
        return $this->render("home/index.html.twig", [
            "title" => "Accueil",
            "message" => "Bienvenue sur mon site",
            "menu" => "home",
            "gites" => $gites
        ]);
    }
    
    /**
     * @route("/contact", name="home_contact")
     */
    public function contact()
    {
        return $this->render("home/contact.html.twig", [
            "menu" => "contact",
        ]);
    }
}