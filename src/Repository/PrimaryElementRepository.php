<?php

namespace App\Repository;

use App\Entity\PrimaryElement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PrimaryElement|null find($id, $lockMode = null, $lockVersion = null)
 * @method PrimaryElement|null findOneBy(array $criteria, array $orderBy = null)
 * @method PrimaryElement[]    findAll()
 * @method PrimaryElement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrimaryElementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PrimaryElement::class);
    }

    /**
     * @param PrimaryElement $primaryElement
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(PrimaryElement $primaryElement)
    {
        $this->_em->persist($primaryElement);
        $this->_em->flush();
    }
}
