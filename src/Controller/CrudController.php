<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CrudController extends AbstractController
{
   /**
     * @Route("/crud/update", name="crud_update")
     */
    public function updateAction(Request $request)
    {
        $formRequest = $request->getMethod() == 'POST' ? $request->request : $request->query;

        $userId = $formRequest->get('user_id', 2);

        switch ($userId) {
            case 1:
                $user = 'admin';
                break;

            case 2:
                $user = 'user';
                break;

            default:
                $user = 'another user';
                break;
        }

        return $this->render('crud_update.html.twig', [
            'title' => $formRequest->get('title', 'Practical Hacking'),
            'content' => $formRequest->get('content', 'Awesome course'),
            'id' => $formRequest->get('record_id', 21),
            'user_id' => $userId,
            'user' => $user,
        ]);
    }
}
