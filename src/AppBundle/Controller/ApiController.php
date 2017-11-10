<?php
/**
 * Created by PhpStorm.
 * User: Toka
 * Date: 11/5/17
 * Time: 17:48
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Posts;
use AppBundle\Entity\Todo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ApiController extends Controller
{

    // add todos

    /**
     * @Route("/ajaxdatabinding/todos", name="todos")
     *
     * @Method({"GET", "POST"})
     */

    public function todosAction(Request $request)
    {
        if ($request->isXMLHttpRequest()) {

            $em = $this->getDoctrine()->getManager();

            $userID = $this->get('security.token_storage')->getToken()->getUser();
            $id = $userID->getId();

            $user = $em->getRepository('AppBundle:Users')->findOneBy(array(
                'id' => $id,
            ));

            $newTodo = $request->getContent();
            if(!empty($newTodo)){
                $todo = new Todo();
                $todo->setName($newTodo);
                $todo->setCreatedAt(new \DateTime());
                $todo->setUser($user->getUsername());

                $em->persist($todo);
                $em->flush();

                $idd = $todo->getId();

                return new JsonResponse(array(
                    'data' => $newTodo,
                    'id' => $idd,
                ));
            }
        }

        return new Response('This is not ajax!', 400);
    }

    // delete todos

    /**
     * @Route("/ajaxdatabinding/todos/del", name="todos_del")
     *
     * @Method({"GET", "POST"})
     */

    public function todosDelAction(Request $request)
    {
        if ($request->isXMLHttpRequest()) {
            $id = $request->getContent();
            $em = $this->getDoctrine()->getManager();

            $todo = $em->getRepository('AppBundle:Todo')->findOneBy(array(
                'id' => $id,
            ));

            if(!empty($todo)){
                $em->remove($todo);
                $em->flush();
            }

            return new JsonResponse(array());
        }

        return new Response('This is not ajax!', 400);
    }

    //delete posts

    /**
     * @Route("/ajaxdatabinding/posts/del", name="posts_del")
     *
     * @Method({"GET", "POST"})
     */

    public function postsDelAction(Request $request)
    {
        if ($request->isXMLHttpRequest()) {

            $userID = $this->get('security.token_storage')->getToken()->getUser();
            $id = $userID->getUsername();

            $idd = $request->getContent();
            $em = $this->getDoctrine()->getManager();

            $todo = $em->getRepository('AppBundle:Posts')->findOneBy(array(
                'id' => $idd,
            ));

            if($todo->getUser() === $id && $todo != null){
                $em->remove($todo);
                $em->flush();

                $del = true;
            } else {
                $del = false;
            }

            return new JsonResponse(array(
                'del' => $del,
            ));

        }

        return new Response('This is not ajax!', 400);
    }

    //add posts

    /**
     * @Route("/ajaxdatabinding/posts", name="posts")
     *
     * @Method({"GET", "POST"})
     */

    public function postAction(Request $request)
    {
        if ($request->isXMLHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            $userID = $this->get('security.token_storage')->getToken()->getUser();
            $id = $userID->getId();

            $user = $em->getRepository('AppBundle:Users')->findOneBy(array(
                'id' => $id,
            ));

            $newPost = $request->getContent();
            if(!empty($newPost)){
                $post = new Posts();
                $date = new \DateTime();

                $post->setUser($user->getUsername());
                $post->setPost($newPost);
                $post->setCreatedAt($date);

                $em->persist($post);
                $em->flush();

                $idd = $post->getId();

                return new JsonResponse(array(
                    'name' => $user->getUsername(),
                    'data' => $newPost,
                    'date' => $date->format('d-m-Y H:i'),
                    'id' => $idd,
                ));
            }
        }

        return new Response('This is not ajax!', 400);
    }

    /**
     * @Route("/ajaxdatabinding/address/check", name="check")
     *
     * @Method({"GET", "POST"})
     */

    public function checkAction(Request $request)
    {
        if ($request->isXMLHttpRequest()) {
            $id = $request->getContent();

            $em = $this->getDoctrine()->getManager();
            $data = $em->getRepository('AppBundle:Address')->findOneBy(array(
                'id' => $id,
            ));

            $data->setCalled(1);
            $em->flush();

            return new JsonResponse(array());
        }

        return new Response('This is not ajax!', 400);
    }


}