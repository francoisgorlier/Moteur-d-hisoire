<?php

namespace App\Repository;

use App\Entity\ConjonctionSubordination;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ConjonctionSubordination|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConjonctionSubordination|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConjonctionSubordination[]    findAll()
 * @method ConjonctionSubordination[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConjonctionSubordinationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConjonctionSubordination::class);
    }

    // /**
    //  * @return ConjonctionSubordination[] Returns an array of ConjonctionSubordination objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ConjonctionSubordination
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
