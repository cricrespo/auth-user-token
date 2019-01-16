<?php

namespace UsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsuariosController extends Controller
{

    public function indexAction()
    {
        return $this->render('UsuariosBundle:Usuarios:index.html.twig');
    }

}
