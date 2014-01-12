<?php
namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\EntityRepository;

class SkyBaseRepository extends EntityRepository
{
    public function getPaged($entity_name, $page, $limit)
    {
        $query_builder = $this->createQueryBuilder("qb");
    }
}