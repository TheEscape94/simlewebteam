<?php
/**
 * Created by PhpStorm.
 * User: Toka
 * Date: 11/4/17
 * Time: 15:57
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ThemeController extends Controller
{
    /**
     *
     * Matches /tema/*
     *
     * @Route("/tema/{id}", name="tema")
     */
    public function indexAction(Request $request)
    {

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}