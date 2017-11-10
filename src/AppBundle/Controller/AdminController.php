<?php
/**
 * Created by PhpStorm.
 * User: Toka
 * Date: 11/4/17
 * Time: 16:04
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     *
     * @Route("/admin/controlpanel", name="admin")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Posts')->findAll(array());

        return $this->render('admin/index.html.twig', array(
            'post' => $posts,
        ));
    }

    /**
     *
     * @Route("/admin/finansije", name="finance")
     */
    public function finAction(Request $request)
    {
        return $this->render('admin/finance.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}