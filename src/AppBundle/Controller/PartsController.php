<?php
/**
 * Created by PhpStorm.
 * User: Toka
 * Date: 11/6/17
 * Time: 14:25
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PartsController extends Controller
{
    /**
     *
     * @Route("/admin/rightsidepart", name="rightside_part")
     */
    public function rightSideAction(Request $request)
    {
        $userID = $this->get('security.token_storage')->getToken()->getUser();
        $username = $userID->getUsername();

        $em = $this->getDoctrine()->getManager();
        $todos = $em->getRepository('AppBundle:Todo')->findBy(array(
            'user' => $username,
        ));

        $adress = count($em->getRepository('AppBundle:Address')->findAll());
        $adressC = count($em->getRepository('AppBundle:Address')->findBy(array(
            'called' => '1',
        )));
        $clients = count($em->getRepository('AppBundle:Clients')->findAll());

        return $this->render('parts/rightside.html.twig', array(
            'todos' => $todos,
            'address' => $adress,
            'addressC' => $adressC,
            'clients' => $clients,

        ));
    }

    /**
     *
     * @Route("/admin/leftsidepart", name="leftside_part")
     */
    public function leftSideAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $themeNum = count($em->getRepository('AppBundle:Themes')->findAll());
        $clientsNum = count($em->getRepository('AppBundle:Clients')->findAll());
        $blogNum = count($em->getRepository('AppBundle:Blog')->findAll());
        $msgNum = count($em->getRepository('AppBundle:Contact')->findBy(array(
            'isRead' => '0',
        )));

        return $this->render('parts/leftside.html.twig', array(
            'theme' => $themeNum,
            'client' => $clientsNum,
            'blog' => $blogNum,
            'msgs' => $msgNum,
        ));
    }

    /**
     *
     * @Route("/admin/navsidepart", name="navside_part")
     */
    public function navSideAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $msgNum = $em->getRepository('AppBundle:Contact')->findBy(array(
            'isRead' => '0',
        ));

        return $this->render('parts/nav.html.twig', array(
            'newMsg' => $msgNum,
        ));
    }

}