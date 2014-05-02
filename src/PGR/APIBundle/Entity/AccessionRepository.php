<?php

namespace PGR\APIBundle\Entity;

use PGR\APIBundle\Entity\AbstractRepository as EntityRepository;

class AccessionRepository extends EntityRepository
{
    private $select_fields = "a.id,
        cn.name,
        c.name as conservationInstitute,
        a.collectionDate,
        a.recordingDate,
        a.collectionCode,
        t.name as taxon,
        ps.name as plantingSeason,
        pt.name as populationType,
        ast.name as status,
        cy.name as country,
        hs.name as herbariumStatus,
        cs.name as conservationStatus,
        h.name as habitat,
        sa.name as sampleArea,
        it.name as irrigation,
        b.tag as breeder,
        p.pedigree as pedigree,
        ts.name as threshingStatus,
        pr.name as parentRock,
        s.name as slope,
        tf.name as family,
        tg.name as genus,
        tc.name as species,
        a.activeWeight,
        a.activeSeedCount,
        a.activeFromDate,
        a.activeStorageLocation,
        a.activeViability,
        a.activeViabilityTestDate,
        a.seedWeight100,
        a.seedWeight1000,
        a.altLocationCode as activeStorageLocationAlt,
        a.storageType,
        a.moisture,
        a.altIdentifier,
        a.altIdentifierType,
        a.remarks";

    public function getFiltered($parameters, $paging)
    {
        $query_builder = $this->getEntityManager()->getRepository("PGRAPIBundle:Accession")
            ->createQueryBuilder("a")
            ->select($this->select_fields)
            ->leftJoin("PGRAPIBundle:CropName", "cn", "WITH", "a.cropNameId = cn.id")
            ->leftJoin("PGRAPIBundle:Cooperator", "c", "WITH", "a.conservationInstituteId = c.id")
            ->leftJoin("PGRAPIBundle:Taxon", "t", "WITH", "a.taxonId = t.id")
            ->leftJoin("PGRAPIBundle:TaxonFamily", "tf", "WITH", "t.familyId = tf.id")
            ->leftJoin("PGRAPIBundle:TaxonGenus", "tg", "WITH", "t.genusId = tg.id")
            ->leftJoin("PGRAPIBundle:TaxonSpecies", "tc", "WITH", "t.speciesId = tc.id")
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
            ->leftJoin("PGRAPIBundle:ThreshingStatus", "ts", "WITH", "a.threshingStatusId = ts.id")
            ->leftJoin("PGRAPIBundle:CollectionSite", "ct", "WITH", "a.collectionSiteId = ct.id")
            ->leftJoin("PGRAPIBundle:ParentRock", "pr", "WITH", "ct.parentRockId = pr.id")
            ->leftJoin("PGRAPIBundle:SlopeType", "s", "WITH", "ct.slopeTypeId = s.id");

        //TODO: Functionality should be made more abstract, maybe worth seeing to once all of it is complete
        if (!empty($paging->page_size)) {
            $page_size = $paging->page_size;
        } else {
            $page_size = 10;
        }
        $query_builder->setMaxResults($page_size);

        if (!empty($paging->page)) {
            if ($paging->page > 1) {
                $page = ($paging->page - 1) * $page_size;
            } else {
                $page = 0;
            }
        } else {
            $page = 0;
        }
        $query_builder->setFirstResult($page);

        if (!empty($parameters->orderBy) && empty($parameters->fts)) {
            $alias = $this->getTableAlias($parameters->orderBy);
            $real_table_column = $this->getRealTableColumn($parameters->orderBy);
            if (!empty($parameters->order)) {
                $query_builder->orderBy($alias . "." . $real_table_column, $parameters->order);
            } else {
                $query_builder->orderBy($alias . "." . $real_table_column, "ASC");
            }
        } else {
            if (!empty($parameters->fts)) {
                $query_builder
                    ->addSelect("MATCH (cn.name) AGAINST (:crop_name) as score")
                    ->orderBy("score", "DESC");
            } else {
                $query_builder->orderBy("a.id", "ASC");
            }
        }

        if (!empty($parameters->fts)) {
            $query_builder
                ->andWhere("MATCH (cn.name) AGAINST (:crop_name) > 1")
                ->setParameter("crop_name", $parameters->fts);

            return $query_builder->getQuery()->getResult();
        }

        if (!empty($parameters->collection_date_from)) {
            $query_builder
                ->andWhere("a.collectionDate >= :collection_date_from")
                ->setParameter("collection_date_from", $parameters->collection_date_from);
        }

        if (!empty($parameters->collection_date_to)) {
            $query_builder
                ->andWhere("a.collectionDate <= :collection_date_to")
                ->setParameter("collection_date_to", $parameters->collection_date_to);
        }

        if (!empty($parameters->recording_date_from)) {
            $query_builder
                ->andWhere("a.recordingDate >= :recording_date_from")
                ->setParameter("recording_date_from", $parameters->recording_date_from);
        }

        if (!empty($parameters->recording_date_to)) {
            $query_builder
                ->andWhere("a.recordingDate <= :recording_date_to")
                ->setParameter("recording_date_to", $parameters->recording_date_to);
        }

        if (!empty($parameters->crop_name)) {
            $query_string = "";
            $is_first = true;
            foreach ($parameters->crop_name as $criteria) {
                //TODO: Should be made more DRY, don't know if this is vulnerable to SQL-injection or not
                if ($is_first) {
                    $is_first = false;
                    if ($criteria->type == "CONTAINS") {
                        $query_string .= "cn.name LIKE '%" . $criteria->value . "%'";
                    } elseif ($criteria->type == "STARTSWITH") {
                        $query_string .= "cn.name LIKE '" . $criteria->value . "%'";
                    } elseif ($criteria->type == "ENDSWITH") {
                        $query_string .= "cn.name LIKE '%" . $criteria->value . "'";
                    }
                } else {
                    if ($criteria->type == "CONTAINS") {
                        $query_string .= " OR cn.name LIKE '%" . $criteria->value . "%'";
                    } elseif ($criteria->type == "STARTSWITH") {
                        $query_string .= " OR cn.name LIKE '" . $criteria->value . "%'";
                    } elseif ($criteria->type == "ENDSWITH") {
                        $query_string .= " OR cn.name LIKE '%" . $criteria->value . "'";
                    }
                }
            }
            $query_builder->andWhere($query_string);
        }

        if (!empty($parameters->taxon)) {
            $query_string = "";
            $is_first = true;
            foreach ($parameters->taxon as $criteria) {
                //TODO: name->id is caused by my inability to make typeahead and ng-model play along nicely
                if ($is_first) {
                    $is_first = false;
                    $query_string .= "t.id = " . $criteria->name->id;
                } else {
                    $query_string .= " OR t.id = " . $criteria->name->id;
                }
            }
            $query_builder->andWhere($query_string);
        }

        if (!empty($parameters->family)) {
            $query_string = "";
            $is_first = true;
            foreach ($parameters->family as $criteria) {
                //TODO: name->id is caused by my inability to make typeahead and ng-model play along nicely
                if ($is_first) {
                    $is_first = false;
                    $query_string .= "tf.id = " . $criteria->name->id;
                } else {
                    $query_string .= " OR tf.id = " . $criteria->name->id;
                }
            }
            $query_builder->andWhere($query_string);
        }

        if (!empty($parameters->genus)) {
            $query_string = "";
            $is_first = true;
            foreach ($parameters->genus as $criteria) {
                //TODO: name->id is caused by my inability to make typeahead and ng-model play along nicely
                if ($is_first) {
                    $is_first = false;
                    $query_string .= "tg.id = " . $criteria->name->id;
                } else {
                    $query_string .= " OR tg.id = " . $criteria->name->id;
                }
            }
            $query_builder->andWhere($query_string);
        }

        if (!empty($parameters->species)) {
            $query_string = "";
            $is_first = true;
            foreach ($parameters->species as $criteria) {
                //TODO: name->id is caused by my inability to make typeahead and ng-model play along nicely
                if ($is_first) {
                    $is_first = false;
                    $query_string .= "tc.id = " . $criteria->name->id;
                } else {
                    $query_string .= " OR tc.id = " . $criteria->name->id;
                }
            }
            $query_builder->andWhere($query_string);
        }

        if (!empty($parameters->holding_institute)) {
            $query_string = "";
            $is_first = true;
            foreach ($parameters->holding_institute as $criteria) {
                if ($is_first) {
                    $is_first = false;
                    $query_string .= "c.id = " . $criteria;
                } else {
                    $query_string .= " OR c.id = " . $criteria;
                }
            }
            $query_builder->andWhere($query_string);
        }

        return $query_builder->getQuery()->getResult();
    }

    private function getTableAlias($column)
    {
        $selections = explode(",", $this->select_fields);
        foreach ($selections as $selection) {
            if (strpos($selection, $column) > -1) {
                return explode(".", $selection)[0];
            }
        }

        return null;
    }

    private function getRealTableColumn($column)
    {
        $selections = explode(",", $this->select_fields);
        foreach ($selections as $selection) {
            if (strpos($selection, $column) > -1) {
                return explode(" ", explode(".", $selection)[1])[0];
            }
        }

        return null;
    }
}