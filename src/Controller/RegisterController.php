<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function index(): Response
    {
        return $this->render('register/index.html.twig', [
            'controller_name' => 'RegisterController',
        ]);
    }

    /**
     * @Route("/signup", name="app_sign_up_index", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if(($user->getCin()==null) ||($user->getNom()==null)||($user->getPrenom()==null)||($user->getDatenaissance()==null) ){
                echo "<script > alert('Form error')</script>";
            }
            else{
                $hash = password_hash($user->getPassword(), PASSWORD_DEFAULT);
                # $encoded = $encoder->encodePassword($user,$user->getPassword());
                $user->setPassword($hash);
                $entityManager->persist($user);
                $entityManager->flush();

                return $this->redirectToRoute('app_user_show', [], Response::HTTP_SEE_OTHER);
            }

        }

        return $this->render('register/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }


}
