<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Characters;

/**
 * @Route("/")
 */
class PanelController extends AbstractController
{
    /**
     * @Route("/", name="panel", methods={"GET"})
     */
    public function panel(): Response
    {
        $user = $this->getUser();
        $characters = $this->getDoctrine()
            ->getRepository(Characters::class)
            ->findByAccountName($user->getLogin());

        return $this->render('panel/characters.html.twig', [
            'user' => $user,
            'characters' => $characters,
        ]);
    }

    /**
     * @Route("/{charName}/character", name="panel_character", methods={"GET"})
     */
    public function character($charName): Response
    {
        $user = $this->getUser();
        $characters = $this->getDoctrine()
            ->getRepository(Characters::class)
            ->findByAccountName($user->getLogin());

        return $this->render('panel/characters.html.twig', [
            'user' => $user,
            'characters' => $characters,
        ]);
    }

}
