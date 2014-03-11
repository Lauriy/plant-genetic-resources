<?php

namespace PGR\APIBundle\Entity;

use PGR\APIBundle\Entity\AbstractRepository as EntityRepository;

class AccessionRepository extends EntityRepository
{
    public function getFiltered($parameters, $paging)
    {
        $query_builder = $this->getEntityManager()->getRepository("PGRAPIBundle:Accession")
            ->createQueryBuilder("a")
            ->select(
                "a.id, cn.name, c.name as conservationInstitute, a.collectionDate, a.recordingDate, a.collectionCode, t.name as taxon, ps.name as plantingSeason, pt.name as populationType, ast.name as status, cy.name as country, hs.name as herbariumStatus, cs.name as conservationStatus, h.name as habitat, sa.name as sampleArea, it.name as irrigation, b.tag as breeder, p.pedigree as pedigree, ts.name as threshingStatus"
            )
            ->leftJoin("PGRAPIBundle:CropName", "cn", "WITH", "a.cropNameId = cn.id")
            ->leftJoin("PGRAPIBundle:Cooperator", "c", "WITH", "a.conservationInstituteId = c.id")
            ->leftJoin("PGRAPIBundle:Taxon", "t", "WITH", "a.taxonId = t.id")
            ->leftJoin("PGRAPIBundle:PlantingSeason", "ps", "WITH", "a.plantingSeasonId = ps.id")
            ->leftJoin("PGRAPIBundle:PopulationType", "pt", "WITH", "a.populationTypeId = pt.id")
            ->leftJoin("PGRAPIBundle:AccessionStatus", "ast", "WITH", "a.statusId = ast.id")
            ->leftJoin("PGRAPIBundle:Country", "cy", "WITH", "a.countryId = cy.id")
            ->leftJoin("PGRAPIBundle:HerbariumStatus", "hs", "WITH", "a.herbariumStatusId = hs.id")
            ->leftJoin("PGRAPIBundle:ConservationStatus", "cs", "WITH", "a.conservationStatusId = cs.id")
            ->leftJoin("PGRAPIBundle:Habitat", "h", "WITH", "a.habitatId = h.id")
            ->leftJoin("PGRAPIBundle:SampleAreaSize", "sa", "WITH", "a.sampleAreaId = sa.id")
            ->leftJoin("PGRAPIBundle:IrrigationType", "it", "WITH", "a.irrigationId = it.id")
            ->leftJoin("PGRAPIBundle:Breeder", "b", "WITH", "a.breederId = b.id")
            ->leftJoin("PGRAPIBundle:Pedigree", "p", "WITH", "a.pedigreeId = p.id")
            ->leftJoin("PGRAPIBundle:ThreshingStatus", "ts", "WITH", "a.threshingStatusId = ts.id");

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

        if (isset($parameters->recording_date_from)) {
            $query_builder
                ->andWhere("a.recordingDate >= :recording_date_from")
                ->setParameter("recording_date_from", $parameters->recording_date_from);
        }

        if (isset($parameters->recording_date_to)) {
            $query_builder
                ->andWhere("a.recordingDate <= :recording_date_to")
                ->setParameter("recording_date_to", $parameters->recording_date_to);
        }

        if (isset($parameters->crop_name)) {
            foreach ($parameters->crop_name as $criteria) {
                if ($criteria->type == "CONTAINS") {
                    $query_builder
                        ->andWhere("cn.name LIKE :value")
                        ->setParameter("value", "%" . $criteria->value . "%");
                } elseif ($criteria->type == "STARTSWITH") {
                    $query_builder
                        ->andWhere("cn.name LIKE :value")
                        ->setParameter("value", $criteria->value . "%");
                } elseif ($criteria->type == "ENDSWITH") {
                    $query_builder
                        ->andWhere("cn.name LIKE :value")
                        ->setParameter("value", "%" . $criteria->value);
                }
            }
        }

        return $query_builder->getQuery()->getResult();
    }
}