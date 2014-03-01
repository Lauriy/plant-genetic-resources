<?php

namespace PGR\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchController extends Controller
{
    public function indexAction()
    {
        return $this->render("PGRSearchBundle:Default:index.html.twig", array());
    }
}
