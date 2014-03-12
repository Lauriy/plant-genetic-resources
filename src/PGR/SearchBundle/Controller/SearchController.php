<?php

namespace PGR\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends Controller
{
    public function indexAction()
    {
        return $this->render("PGRSearchBundle:Default:index.html.twig", array());
    }

    public function exportExcelAction()
    {
        $template_data = array();
        $template_data["fields"] = json_decode($this->getRequest()->get("fields"));
        $filters = json_decode($this->getRequest()->get("filters"));
        $paging = json_decode($this->getRequest()->get("paging"));
        $template_data["accessions"] = $this->getDoctrine()->getRepository("PGRAPIBundle:Accession")
            ->getFiltered($filters, $paging);
        $export_file_name = "pgr_export_" . time() . ".xls";
        $response_content = $this->renderView("PGRSearchBundle:Default:export_excel.html.php", $template_data);
        $response = new Response($response_content);
        $response->headers->set("Content-Type", "application/xls");
        $response->headers->set("Content-Disposition", "attachment; filename=$export_file_name");
        $response->headers->set("Pragma", "no-cache");
        $response->headers->set("Expires", "0");

        return $response;
    }
}
