<?php

namespace PGR\APIBundle\Entity;

use PGR\APIBundle\Entity\AbstractRepository as EntityRepository;

class AccessionRepository extends EntityRepository
{
    public function getFiltered($parameters, $paging)
    {
        $query_builder = $this->getEntityManager()->getRepository("PGRAPIBundle:Accession")
            ->createQueryBuilder("a")
            ->select("a.id, cn.name, c.name as conservationInstitute, a.collectionDate")
            ->leftJoin("PGRAPIBundle:CropName", "cn", "WITH", "a.cropNameId = cn.id")
            ->leftJoin("PGRAPIBundle:Cooperator", "c", "WITH", "a.conservationInstituteId = c.id");
        [
            "id",
            "name",
            "taxon",
            "plantingSeason",
            "populationType",
            "status",
            "country",
            "collectionSite",
            "collectionCode",
            "conservationInstitute",
            "collectionDate",
            "recordingDate",
            "herbariumStatus",
            "conservationStatus",
            "habitat",
            "sampleArea",
            "irrigation",
            "threshingStatus",
            "breeder",
            "pedigree"
        ];

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
                $page = 0;
            }
        } else {
            $page = 0;
        }
        $query_builder->setFirstResult($page);

        if (isset($parameters->orderBy)) {
            if (isset($parameters->order)) {
                $query_builder->orderBy("a." . $parameters->orderBy, $parameters->order);
            } else {
                $query_builder->orderBy("a." . $parameters->orderBy, "ASC");
            }
        } else {
            if (isset($parameters->fts)) {
                $query_builder
                    ->addSelect("MATCH (cn.name) AGAINST (:crop_name) as score")
                    ->orderBy("score", "DESC");
            } else {
                $query_builder->orderBy("a.id", "ASC");
            }
        }

        if (isset($parameters->fts)) {
            $query_builder
                ->andWhere("MATCH (cn.name) AGAINST (:crop_name) > 1")
                ->setParameter("crop_name", $parameters->fts);

            return $query_builder->getQuery()->getResult();
        }

        if (isset($parameters->collection_date_from)) {
            $query_builder
                ->andWhere("a.collectionDate >= :collection_date_from")
                ->setParameter("collection_date_from", $parameters->collection_date_from);
        }

        if (isset($parameters->collection_date_to)) {
            $query_builder
                ->andWhere("a.collectionDate <= :collection_date_to")
                ->setParameter("collection_date_to", $parameters->collection_date_to);
        }

        return $query_builder->getQuery()->getResult();
    }
}