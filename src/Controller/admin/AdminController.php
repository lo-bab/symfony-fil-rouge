<?php

namespace App\Controller\Admin;

use Doctrine\Persistence\ManagerRegistry;
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
        
        return $this->render('admin/index.html.twig', []);
    }
    
}