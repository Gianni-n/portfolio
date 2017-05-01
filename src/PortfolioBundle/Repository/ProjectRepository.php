<?php

namespace PortfolioBundle\Repository;

/**
 * ProjectRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectRepository extends \Doctrine\ORM\EntityRepository
{
    public function getByDate(){

        $query = $this->createQueryBuilder('p')
            ->orderBy('p.date', 'DESC')
            ->getQuery();

        return $query->getResult();
    }
}
