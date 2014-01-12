<?php

namespace PSAD\Bundle\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchController extends Controller
{
    public function indexAction()
    {
        $accessions = $this->getDoctrine()->getRepository("PSADAPIBundle:Accession")
            ->getPaged();
        return $this->render('PSADSearchBundle:Default:index.html.twig', array("accessions" => $accessions));
    }
}
