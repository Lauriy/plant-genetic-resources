<?php

namespace PSAD\Bundle\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchController extends Controller
{
    public function indexAction()
    {
        $accession_listing_fields = $this->container->getParameter("accession_listing_fields");
        return $this->render('PSADSearchBundle:Default:index.html.twig', array("accession_listing_fields"
            => json_encode($accession_listing_fields)));
    }
}
