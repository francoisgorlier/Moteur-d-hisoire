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

    /**
     * @param ConjonctionCoordination $conjCoordination
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(ConjonctionCoordination $conjCoordination) {
        $this->_em->persist($conjCoordination);
        $this->_em->flush();
    }
}
