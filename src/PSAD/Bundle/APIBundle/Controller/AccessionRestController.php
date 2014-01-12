<?php

namespace PSAD\Bundle\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccessionRestController extends Controller
{
    public function getAccessionAction($accession_id)
    {
        $accession = $this->getDoctrine()->getRepository("PSADAPIBundle:Accession")
            ->findOneBy(array("nc" => $accession_id));
        return $accession;
    }
    public function getAccessionsAction($page, $limit)
    {
        $accessions = $this->getDoctrine()->getRepository("PSADAPIBundle:Abstract")
            ->getPaged("Accession", $page, $limit);
        return $accessions;
    }
}
