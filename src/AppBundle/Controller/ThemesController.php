<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Themes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\FileUploader;

/**
 * Theme controller.
 *
 */
class ThemesController extends Controller
{
    /**
     * Lists all theme entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $themes = $em->getRepository('AppBundle:Themes')->findAll();

        return $this->render('themes/index.html.twig', array(
            'themes' => $themes,
        ));
    }

    /**
     * Creates a new theme entity.
     *
     */
    public function newAction(Request $request)
    {
        $theme = new Themes();
        $form = $this->createForm('AppBundle\Form\ThemesType', $theme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $fileUploader = new FileUploader('bundles/app/upload/themes/');

            $file = $theme->getPreviewImg();
            $fileName = $fileUploader->upload($file);

            $theme->setPreviewImg($fileName);


            $em = $this->getDoctrine()->getManager();
            $em->persist($theme);
            $em->flush();

            return $this->redirectToRoute('admin_teme_show', array('id' => $theme->getId()));
        }

        return $this->render('themes/new.html.twig', array(
            'theme' => $theme,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a theme entity.
     *
     */
    public function showAction(Themes $theme)
    {
        $deleteForm = $this->createDeleteForm($theme);

        return $this->render('themes/show.html.twig', array(
            'theme' => $theme,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing theme entity.
     *
     */
    public function editAction(Request $request, Themes $theme)
    {
        $deleteForm = $this->createDeleteForm($theme);
        $editForm = $this->createForm('AppBundle\Form\ThemesType', $theme);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_teme_edit', array('id' => $theme->getId()));
        }

        return $this->render('themes/edit.html.twig', array(
            'theme' => $theme,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a theme entity.
     *
     */
    public function deleteAction(Request $request, Themes $theme)
    {
        $form = $this->createDeleteForm($theme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($theme);
            $em->flush();
        }

        return $this->redirectToRoute('admin_teme_index');
    }

    /**
     * Creates a form to delete a theme entity.
     *
     * @param Themes $theme The theme entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Themes $theme)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_teme_delete', array('id' => $theme->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
