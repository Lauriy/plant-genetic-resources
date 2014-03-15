<?php

namespace PGR\APIBundle\Entity;

use PGR\APIBundle\Entity\AbstractRepository as EntityRepository;

class TaxonRepository extends EntityRepository
{
    public function getIdsAndNamesForAutocomplete($input)
    {
        $query_builder = $this->getEntityManager()->getRepository("PGRAPIBundle:Taxon")
            ->createQueryBuilder("a")
            ->select("a.id, a.name")
            ->addSelect("MATCH (a.name) AGAINST (:input) as score")
            ->andWhere("a.name LIKE :like_input")
            ->setParameter("input", $input)
            ->setParameter("like_input", "%" . $input . "%")
            ->setMaxResults(20)
            ->orderBy("score", "DESC");

        return $query_builder->getQuery()->getResult();
    }
}