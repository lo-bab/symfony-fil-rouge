<?php

namespace App\Controller\Admin;

use App\Entity\Gite;
use App\Form\GiteType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_index")
     */
    public function index(ManagerRegistry $doctrine)
    {
        $repository = $doctrine->getRepository(Gite::class);

        $gites = $repository->findAll();

        return $this->render('admin/index.html.twig', [
            "title" => "Admin",
            "title_page" => "Gestion des gites",
            "gites" => $gites
        ]);
    }
    
    /**
     * @Route("/admin/gite/create", name="admin_gite_create")
     */
    public function create(ManagerRegistry $doctrine, Request $request)
    {
        $gite = new Gite;
        $form = $this->createForm(GiteType::class, $gite);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $manager = $doctrine->getManager();
            $manager->persist($gite);
            $manager->flush();
            $this->addFlash("success", "gite créé");
            return $this->redirectToRoute('admin_index');
        }
        
        return $this->render('admin/gite/create.html.twig', [
            "title" => "Nouveau gite",
            "title_page" => "Ajouter un gite",
            "formGite" => $form->createView()
        ]);
    }
    
    /**
     * @Route("/admin/gite/edit/{id}", name="admin_gite_edit")
     */
    public function edit(Gite $gite, ManagerRegistry $doctrine, Request $request)
    {
        $form = $this->createForm(GiteType::class, $gite);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $manager = $doctrine->getManager();
            // pas de persist car l'objet existe déjà
            $manager->flush();
            $this->addFlash("success", "gite modifié");
            return $this->redirectToRoute('admin_index');
        }
        
        return $this->render('admin/gite/edit.html.twig', [
            "title" => "Edition gite",
            "title_page" => "Modifier un gite",
            "formGite" => $form->createView()
        ]);
    }
    
    /**
     * @Route("/admin/gite/delete/{id}", name="admin_gite_delete")
     */
    public function delete(Gite $gite, ManagerRegistry $doctrine, Request $request)
    {
        $form = $this->createForm(GiteType::class, $gite);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $manager = $doctrine->getManager();
            $manager->persist($gite);
            $manager->flush();
            $this->addFlash("success", "gite modifié");
            return $this->redirectToRoute('admin_index');
        }
        
        return $this->render('admin/gite/edit.html.twig', [
            "title" => "Edition gite",
            "title_page" => "Modifier un gite",
            "formGite" => $form->createView()
        ]);
    }
}