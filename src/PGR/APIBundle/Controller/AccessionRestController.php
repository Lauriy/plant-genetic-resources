<?php

namespace PGR\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccessionRestController extends Controller
{
    public function getAccessionAction($accession_id)
    {
        $accession = $this->getDoctrine()->getRepository("PGRAPIBundle:Accession")
            ->findOneById($accession_id);

        return $accession;
    }

    public function getAccessionsAction()
    {
        $filters = json_decode($this->getRequest()->get("filters"));
        $paging = json_decode($this->getRequest()->get("paging"));
        $accessions = $this->getDoctrine()->getRepository("PGRAPIBundle:Accession")
            ->getFiltered($filters, $paging);

        return $accessions;
    }
}
