<?php

namespace PGR\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CooperatorRestController extends Controller
{
    public function getCooperatorAction($cooperator_id)
    {
        $cooperator = $this->getDoctrine()->getRepository("PGRAPIBundle:Cooperator")
            ->findOneById($cooperator_id);

        return $cooperator;
    }

    public function getCooperatorsAction()
    {
        $cooperators = $this->getDoctrine()->getRepository("PGRAPIBundle:Cooperator")
            ->findAll();

        return $cooperators;
    }
}
