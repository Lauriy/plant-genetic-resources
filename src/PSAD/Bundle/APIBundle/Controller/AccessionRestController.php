<?php

namespace PSAD\Bundle\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccessionRestController extends Controller
{
    public function getAccessionAction($accession_id)
    {
        $accession = $this->getDoctrine()->getRepository("PSADAPIBundle:Accession")
            ->findOneById($accession_id);
        return $accession;
    }

    public function getAccessionsAction()
    {
        $page = $this->get('request_stack')->getCurrentRequest()->get("page");
        $limit = $this->container->getParameter("default_page_size");
        $accessions = $this->getDoctrine()->getRepository("PSADAPIBundle:Accession")
            ->getPaged("Accession", $page, $limit);
        return $accessions;
    }
}
