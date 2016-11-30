<?php

namespace ApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DocumentationController extends Controller
{
    /**
     * Return API documentation
     * 
     */
    public function indexAction(Request $request)
    {
        return $this->render('documentation/index.html.twig');
    }
}
