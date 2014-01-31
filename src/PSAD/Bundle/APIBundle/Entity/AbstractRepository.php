<?php
namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AbstractRepository extends EntityRepository
{
    public function getPaged($entity_name, $page=1, $limit=10)
    {
        $query_builder = $this->getEntityManager()->getRepository("PSADAPIBundle:".
            $entity_name)->createQueryBuilder("qb");
        $query_builder->setFirstResult(($page - 1) * $limit);
        $query_builder->setMaxResults($limit);
        return $query_builder->getQuery()->getResult();
    }
}