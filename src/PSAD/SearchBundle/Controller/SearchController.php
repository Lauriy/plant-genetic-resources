<?php

namespace PSAD\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchController extends Controller
{
    public function indexAction()
    {
        return $this->render("PSADSearchBundle:Default:index.html.twig", array());
    }
}
