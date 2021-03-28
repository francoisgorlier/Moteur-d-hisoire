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

    /**
     * @param Determinant $determinant
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(Determinant $determinant) {
        $this->_em->persist($determinant);
        $this->_em->flush();
    }
}
