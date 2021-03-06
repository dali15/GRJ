<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AdminHomeController extends Controller
{
    /**
     * @Route("/admin", name="admin_home")
     */
    public function index()
    {
        return $this->render('admin_home/index.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    }

}
