<?php

namespace Uknow\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->render('UknowPlatformBundle::platform.html.twig');
    }

    public function navAction()
    {
        return $this->render('UknowPlatformBundle:header:nav.html.twig');
    }

    public function profilAction()
    {
        return $this->render('UknowPlatformBundle:header:profil.html.twig');
    }

    public function boardAction()
    {
        $json = file_get_contents('bundles/uknowplatform/json/structure.json');
        $jsonStructure = json_decode($json, true);
        $json = file_get_contents('bundles/uknowplatform/json/niveaux.json');
        $jsonNiveaux = json_decode($json, true);
        return $this->render('UknowPlatformBundle:board:board_structure.html.twig', array(
            'listStructure' => $jsonStructure,
            'listNiveaux' => $jsonNiveaux
        ));
    }
}
