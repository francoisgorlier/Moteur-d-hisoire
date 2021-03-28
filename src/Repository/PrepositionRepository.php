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

    /**
     * @param Preposition $preposition
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(Preposition $preposition) {
        $this->_em->persist($preposition);
        $this->_em->flush();
    }
}
