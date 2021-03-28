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

    /**
     * @param Adjectif $adjectif
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(Adjectif $adjectif) {
        $this->_em->persist($adjectif);
        $this->_em->flush();
    }
}
