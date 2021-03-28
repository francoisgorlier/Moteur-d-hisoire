<?php

namespace App\Repository;

use App\Entity\Determinant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Determinant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Determinant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Determinant[]    findAll()
 * @method Determinant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeterminantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Determinant::class);
    }

    // /**
    //  * @return Determinant[] Returns an array of Determinant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Determinant
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
