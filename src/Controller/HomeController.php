<?php

namespace App\Controller;

use App\Entity\Gite;
use App\Entity\GiteSearch;
use App\Form\GiteSearchType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @route("/", name="home_index")
     */
    public function index(ManagerRegistry $doctrine, Request $request)
    {
        $search = new GiteSearch();
        // create search form
        $form = $this->createForm(GiteSearchType::class, $search);
        $form->handleRequest($request);
        
        /**
         * @var GiteRepository $repository
         */
        $repository = $doctrine->getRepository(Gite::class);
        $gites = $repository->findAll();
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $gites = $repository->findGiteSearch($search);
        }
        
        return $this->render("home/index.html.twig", [
            "title" => "Accueil",
            "title_page" => "Bienvenue sur mon site",
            "menu" => "home",
            "gites" => $gites,
            "form" => $form->createView()
        ]);
    }
    
    /**
     * @route("/contact", name="home_contact")
     */
    public function contact()
    {
        return $this->render("home/contact.html.twig", [
            "title" => "Contact",
            "title_page" => "Formulaire de contact",
            "menu" => "contact",
        ]);
    }
}