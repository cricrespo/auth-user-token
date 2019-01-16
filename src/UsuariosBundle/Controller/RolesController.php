<?php

namespace UsuariosBundle\Controller;

use UsuariosBundle\Entity\Roles;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UsuariosBundle\Form\RolesType;


/**
 * Role controller.
 *
 */
class RolesController extends Controller
{
    /**
     * Lists all role entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $roles = $em->getRepository('UsuariosBundle:Roles')->findAll();

        return $this->render('@Usuarios/Roles/index.html.twig', array(
            'roles' => $roles,
        ));
    }

    /**
     * Finds and displays a role entity.
     *
     */
    public function showAction(Roles $role)
    {
        
        return $this->render('@Usuarios/Roles/show.html.twig', array(
            'role' => $role,
        ));
    }

    public function createAction(Request $request)
    {
        $rol = new Roles();
        $form = $this->createForm(RolesType::class, $rol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rol);
            $em->flush();

            return $this->redirectToRoute('roles_show', array('id' => $rol->getId()));
        }

        return $this->render('@Usuarios/Roles/new.html.twig', array(
            'rol' => 'Rol created',
            'form' => $form->createView(),
        ));
    }
}
