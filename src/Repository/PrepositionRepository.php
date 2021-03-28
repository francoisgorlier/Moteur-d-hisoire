<?php

namespace App\Repository;

use App\Entity\Preposition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Preposition|null find($id, $lockMode = null, $lockVersion = null)
 * @method Preposition|null findOneBy(array $criteria, array $orderBy = null)
 * @method Preposition[]    findAll()
 * @method Preposition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrepositionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Preposition::class);
    }

    // /**
    //  * @return Preposition[] Returns an array of Preposition objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Preposition
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
