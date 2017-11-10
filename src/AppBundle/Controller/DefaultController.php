<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     *
     * Matches /blog/*
     *
     * @Route("/blog/{cat}/", name="blog_cat")
     */
    public function blogTxtAction($cat)
    {
        $em = $this->getDoctrine()->getManager();
        $all = $em->getRepository('AppBundle:Blog')->findBy(array(
           'category' => $cat,
        ));

        if($cat == 0) {
            $catName = "Programiranje";
        } else if($cat == 1){
            $catName = "Dizajn";
        } else {
            $catName = "SEO & Social Networks";
        }

        return $this->render('default/blogcat.html.twig', array(
            'news' => $all,
            'cat' => $catName,
        ));
    }

    /**
     *
     * Matches /blog/{cat}/*
     *
     * @Route("/blog/{cat}/{id}", name="blog_news")
     */
    public function blogOneAction($cat, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $all = $em->getRepository('AppBundle:Blog')->findOneBy(array(
            'id' => $id,
        ));

        if($cat == 0) {
            $catName = "Programiranje";
        } else if($cat == 1){
            $catName = "Dizajn";
        } else {
            $catName = "SEO & Social Networks";
        }

        return $this->render('default/blogprew.html.twig', array(
            'news' => $all,
            'cat' => $catName,
        ));
    }
}
