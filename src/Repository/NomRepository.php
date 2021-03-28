<?php

namespace App\Repository;

use App\Entity\Nom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Nom|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nom|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nom[]    findAll()
 * @method Nom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nom::class);
    }

    /**
     * @param Nom $nom
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(Nom $nom) {
        $this->_em->persist($nom);
        $this->_em->flush();
    }
}
