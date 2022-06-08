<?php

namespace App\Controller;

use App\Entity\Gite;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @route("/", name="home")
     *
     */
    public function index(ManagerRegistry $doctrine)
    {
        $repository = $doctrine->getRepository(Gite::class);
        
        $gites = $repository->findAll();
        
        // $manager = $doctrine->getManager();
        
        // $gite = new Gite;
        // $gite
        //     ->setNom("Gite2")
        //     ->setDescription("Description2")
        //     ->setSurface(100)
        //     ->setChambre(3)
        //     ->setCouchage(6);

        // $manager->persist($gite);
        // $manager->flush();
        
        return $this->render("home/index.html.twig", [
            "title" => "Accueil",
            "message" => "Bienvenue sur mon site",
            "menu" => "home",
            "gites" => $gites
        ]);
    }
    
    /**
     * @route("/contact", name="contact")
     *
     */
    public function contact()
    {
        return $this->render("home/contact.html.twig", [
            "title" => "Contact",
            "message" => "Formulaire de contact",
            "menu" => "contact",
        ]);
    }
}