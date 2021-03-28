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

    /**
     * @param ConjonctionSubordination $conjonctionSubordination
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(ConjonctionSubordination $conjonctionSubordination) {
        $this->_em->persist($conjonctionSubordination);
        $this->_em->flush();
    }
}
