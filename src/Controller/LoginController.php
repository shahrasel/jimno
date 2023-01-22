<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route(path: '/login', name: 'login')]
    public function loginForm(Request $request, AuthenticationUtils $authenticationUtils)
    {
        return $this->render('login/loginForm.html.twig', [
            'error' => $authenticationUtils->getLastAuthenticationError(),
            'email' => $authenticationUtils->getLastUsername()
        ]);
    }
}