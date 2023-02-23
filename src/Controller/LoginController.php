<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(Security $security): Response
    {
        $user = $security->getUser();

        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
            'user' => $user
        ]);
    }
}