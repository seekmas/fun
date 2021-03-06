<?php

namespace Mc\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mc\AdminBundle\Entity\Unit;
use Mc\AdminBundle\Form\UnitType;

/**
 * Unit controller.
 *
 */
class UnitController extends Controller
{

    /**
     * Lists all Unit entities.
     *
     */
    public function indexAction( $program = 0  , $page = 1 )
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->getRepository('McAdminBundle:Unit')->createQueryBuilder('u');
        $query->select('u');

        if( $program != 0 )
        {
            $query->where('u.programId = :programId');
            $query->setParameter('programId' , $program);
        }


        $paginator  = $this->get('knp_paginator');
        $entities = $paginator->paginate(
            $query,
            $this->get('request')->query->get('page') ? $this->get('request')->query->get('page') : $page ,
            20/*limit per page*/
        );

        $programs = $em->getRepository('McAdminBundle:Program')->findAll();

        return $this->render('McAdminBundle:Unit:index.html.twig', array(
            'entities' => $entities,
            'programs' => $programs,
        ));
    }
    /**
     * Creates a new Unit entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Unit();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $entity->setProgramId( $entity->getProgramId()->getId() );

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_unit_show', array('id' => $entity->getId())));
        }

        return $this->render('McAdminBundle:Unit:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Unit entity.
    *
    * @param Unit $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Unit $entity)
    {
        $form = $this->createForm(new UnitType(), $entity, array(
            'action' => $this->generateUrl('admin_unit_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Unit entity.
     *
     */
    public function newAction()
    {
        $entity = new Unit();
        $form   = $this->createCreateForm($entity);

        return $this->render('McAdminBundle:Unit:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Unit entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('McAdminBundle:Unit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Unit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        $entities = $this->getDoctrine()->getRepository('McAdminBundle:Unit')->findByProgramId( $entity->getprogramId() );

        return $this->render('McAdminBundle:Unit:show.html.twig', array(
            'entities'    => $entities,
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Unit entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('McAdminBundle:Unit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Unit entity.');
        }
        $entity->setProgramId( $this->getDoctrine()->getRepository('McAdminBundle:Program')->findOneById( $entity->getprogramId() ) );

        //\Doctrine\Common\Util\Debug::dump($entity);

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);



        $entities = $this->getDoctrine()->getRepository('McAdminBundle:Unit')->findByProgramId( $entity->getprogramId() );
        
        return $this->render('McAdminBundle:Unit:edit.html.twig', array(
            'entities'    => $entities,
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Unit entity.
    *
    * @param Unit $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Unit $entity)
    {
        $form = $this->createForm(new UnitType(), $entity, array(
            'action' => $this->generateUrl('admin_unit_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Unit entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('McAdminBundle:Unit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Unit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $entity->setProgramId( $entity->getProgramId()->getId() );
            
            #\Doctrine\Common\Util\Debug::dump( $entity );

            $em->flush();

            return $this->redirect($this->generateUrl('admin_unit_edit', array('id' => $id)));
        }
        $entities = $this->getDoctrine()->getRepository('McAdminBundle:Unit')->findByProgramId( $entity->getprogramId() );

        return $this->render('McAdminBundle:Unit:edit.html.twig', array(
            'entities'    => $entities,
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Unit entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('McAdminBundle:Unit')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Unit entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_unit'));
    }

    /**
     * Creates a form to delete a Unit entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_unit_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
