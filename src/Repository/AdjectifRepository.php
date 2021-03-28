<?php

namespace App\Repository;

use App\Entity\Adjectif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Adjectif|null find($id, $lockMode = null, $lockVersion = null)
 * @method Adjectif|null findOneBy(array $criteria, array $orderBy = null)
 * @method Adjectif[]    findAll()
 * @method Adjectif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdjectifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Adjectif::class);
    }

    // /**
    //  * @return Adjectif[] Returns an array of Adjectif objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Adjectif
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
