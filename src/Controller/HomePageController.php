<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */
    public function index(): Response   
    {

        $words = ['sky','cloud','wood','rock','forest','mountain','breeze'];
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
            'words'=>$words
        ]);
    }
}
