<?php

namespace AppBundle\Controller;

use AppBundle\Entity\OrderSite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ordersite controller.
 *
 */
class OrderSiteController extends Controller
{
    /**
     * Lists all orderSite entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $orderSites = $em->getRepository('AppBundle:OrderSite')->findAll();

        return $this->render('ordersite/index.html.twig', array(
            'orderSites' => $orderSites,
        ));
    }

    /**
     * Creates a new orderSite entity.
     *
     */
    public function newAction(Request $request)
    {
        $orderSite = new Ordersite();
        $form = $this->createForm('AppBundle\Form\OrderSiteType', $orderSite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($orderSite);
            $em->flush();

            return $this->redirectToRoute('ordersite_show', array('id' => $orderSite->getId()));
        }

        return $this->render('ordersite/new.html.twig', array(
            'orderSite' => $orderSite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a orderSite entity.
     *
     */
    public function showAction(OrderSite $orderSite)
    {
        $deleteForm = $this->createDeleteForm($orderSite);

        return $this->render('ordersite/show.html.twig', array(
            'orderSite' => $orderSite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing orderSite entity.
     *
     */
    public function editAction(Request $request, OrderSite $orderSite)
    {
        $deleteForm = $this->createDeleteForm($orderSite);
        $editForm = $this->createForm('AppBundle\Form\OrderSiteType', $orderSite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ordersite_edit', array('id' => $orderSite->getId()));
        }

        return $this->render('ordersite/edit.html.twig', array(
            'orderSite' => $orderSite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a orderSite entity.
     *
     */
    public function deleteAction(Request $request, OrderSite $orderSite)
    {
        $form = $this->createDeleteForm($orderSite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($orderSite);
            $em->flush();
        }

        return $this->redirectToRoute('ordersite_index');
    }

    /**
     * Creates a form to delete a orderSite entity.
     *
     * @param OrderSite $orderSite The orderSite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(OrderSite $orderSite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ordersite_delete', array('id' => $orderSite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
