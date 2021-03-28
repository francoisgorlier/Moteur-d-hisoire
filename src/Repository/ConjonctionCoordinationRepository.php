<?php

namespace App\Repository;

use App\Entity\ConjonctionCoordination;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ConjonctionCoordination|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConjonctionCoordination|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConjonctionCoordination[]    findAll()
 * @method ConjonctionCoordination[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConjonctionCoordinationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConjonctionCoordination::class);
    }

    // /**
    //  * @return ConjonctionCoordination[] Returns an array of ConjonctionCoordination objects
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
    public function findOneBySomeField($value): ?ConjonctionCoordination
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
