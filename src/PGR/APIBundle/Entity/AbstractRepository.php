<?php
namespace PGR\APIBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AbstractRepository extends EntityRepository
{
    public function getIdsAndNamesForAutocomplete($input)
    {
        $query_builder = $this->getEntityManager()->getRepository("PGRAPIBundle:" . $this->entity_name)
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