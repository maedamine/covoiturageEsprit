<?php

namespace PiEsprit\CovoiturageBundle\Controller;

use PiEsprit\CovoiturageBundle\Entity\Annonce;
use PiEsprit\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 * Annonce controller.
 *
 */
class AnnonceController extends Controller
{
    /**
     * Lists all annonce entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $annonces = $em->getRepository('PiEspritCovoiturageBundle:Annonce')->findAll();
        /**
         * @ var $paginator Knp\Component\Pager\Paginator
         */
        $paginator=$this->get('knp_paginator');
        $result =$paginator->paginate(
            $annonces,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',2)

        );

        return $this->render('@PiEspritCovoiturage/annonce/index.html.twig', array(
            'annonces' => $result,
        ));
    }

    /**
     * Creates a new annonce entity.
     *
     */
    public function newAction(Request $request)
    {



        $annonce = new Annonce();
        $form = $this->createForm('PiEsprit\CovoiturageBundle\Form\AnnonceType', $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();

            return $this->redirectToRoute('Annonce_show', array('id' => $annonce->getId()));
        }

        return $this->render('@PiEspritCovoiturage/annonce/new.html.twig', array(
            'annonce' => $annonce,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a annonce entity.
     *
     */
    public function showAction(Annonce $annonce)
    {
        $deleteForm = $this->createDeleteForm($annonce);

        return $this->render('@PiEspritCovoiturage/annonce/show.html.twig', array(
            'annonce' => $annonce,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing annonce entity.
     *
     */
    public function editAction(Request $request, Annonce $annonce)
    {
        $deleteForm = $this->createDeleteForm($annonce);
        $editForm = $this->createForm('PiEsprit\CovoiturageBundle\Form\AnnonceType', $annonce);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('Annonce_edit', array('id' => $annonce->getId()));
        }

        return $this->render('@PiEspritCovoiturage/annonce/edit.html.twig', array(
            'annonce' => $annonce,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a annonce entity.
     *
     */
    public function deleteAction(Request $request, Annonce $annonce)
    {
        $form = $this->createDeleteForm($annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($annonce);
            $em->flush();
        }

        return $this->redirectToRoute('Annonce_index');
    }

    /**
     * Creates a form to delete a annonce entity.
     *
     * @param Annonce $annonce The annonce entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Annonce $annonce)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Annonce_delete', array('id' => $annonce->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
