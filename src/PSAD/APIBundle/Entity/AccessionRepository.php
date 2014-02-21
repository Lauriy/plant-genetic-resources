<?php

namespace PSAD\APIBundle\Entity;

use PSAD\APIBundle\Entity\AbstractRepository as EntityRepository;

class AccessionRepository extends EntityRepository
{
    public function getFiltered($parameters, $paging)
    {
        $query_builder = $this->getEntityManager()->getRepository("PSADAPIBundle:Accession")
            ->createQueryBuilder("a")
            ->select("a.id, cn.name, c.name as conservationInstitute, a.collectionDate")
            ->innerJoin("PSADAPIBundle:CropName", "cn", "WITH", "a.cropNameId = cn.id")
            ->innerJoin("PSADAPIBundle:Cooperator", "c", "WITH", "a.conservationInstituteId = c.id")
            ->orderBy("a.id", "ASC");

        if (isset($paging->page_size)) {
            $page_size = $paging->page_size;
        } else {
            $page_size = 10;
        }
        $query_builder->setMaxResults($page_size);

        if (isset($paging->page)) {
            if ($paging->page > 1) {
                $page = ($paging->page - 1) * $page_size;
            } else {
                $page = 1;
            }
        } else {
            $page = 1;
        }
        $query_builder->setFirstResult($page);

        if (isset($parameters->collectionDate)) {
            error_log(print_r($parameters->collectionDate->collection_date_from, true));
            $query_builder
                ->andWhere("a.collectionDate >= :collection_date_from")
                ->andWhere("a.collectionDate <= :collection_date_to")
                ->setParameter("collection_date_from", $parameters->collectionDate->collection_date_from)
                ->setParameter("collection_date_to", $parameters->collectionDate->collection_date_to);
        }

        error_log($query_builder->getQuery()->getSQL());

        return $query_builder->getQuery()->getResult();
    }
}