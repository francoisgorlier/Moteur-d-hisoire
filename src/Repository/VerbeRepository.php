<?php

namespace App\Repository;

use App\Entity\Verbe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Verbe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Verbe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Verbe[]    findAll()
 * @method Verbe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VerbeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Verbe::class);
    }

    /**
     * @param Verbe $verbe
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(Verbe $verbe) {
        $this->_em->persist($verbe);
        $this->_em->flush();
    }
}
