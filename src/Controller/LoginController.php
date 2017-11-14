<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function indexAction(Request $request)
    {
        return $this->render('login.html.twig', [
            'method' => $request->getMethod(),
            'data' => $request->getMethod() == 'POST' ? $request->request->all() : $request->query->all(),
        ]);
    }
}
