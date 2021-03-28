<?php

namespace App\Factory;

use App\Entity\Adjectif;
use App\Entity\ConjonctionCoordination;
use App\Entity\ConjonctionSubordination;
use App\Entity\Determinant;
use App\Entity\Nom;
use App\Entity\Preposition;
use App\Entity\Verbe;
use App\Entity\WordInterface;
use App\Repository\AdjectifRepository;
use App\Repository\ConjonctionCoordinationRepository;
use App\Repository\ConjonctionSubordinationRepository;
use App\Repository\DeterminantRepository;
use App\Repository\NomRepository;
use App\Repository\PrepositionRepository;
use App\Repository\VerbeRepository;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class WordFactory
{
    /**
     * @var AdjectifRepository
     */
    private $adjectifRepository;

    /**
     * @var ConjonctionCoordinationRepository
     */
    private $conjonctionCoordinationRepository;

    /**
     * @var ConjonctionSubordinationRepository
     */
    private $conjonctionSubordinationRepository;

    /**
     * @var DeterminantRepository
     */
    private $determinantRepository;

    /**
     * @var NomRepository
     */
    private $nomRepository;

    /**
     * @var PrepositionRepository
     */
    private $prepositionRepository;

    /**
     * @var VerbeRepository
     */
    private $verbeRepository;

    public function __construct
    (
        AdjectifRepository $adjectifRepository,
        ConjonctionCoordinationRepository $conjonctionCoordinationRepository,
        ConjonctionSubordinationRepository $conjonctionSubordinationRepository,
        DeterminantRepository $determinantRepository,
        NomRepository $nomRepository,
        PrepositionRepository $prepositionRepository,
        VerbeRepository $verbeRepository
    )
    {
        $this->adjectifRepository = $adjectifRepository;
        $this->conjonctionCoordinationRepository = $conjonctionCoordinationRepository;
        $this->conjonctionSubordinationRepository = $conjonctionSubordinationRepository;
        $this->determinantRepository = $determinantRepository;
        $this->nomRepository = $nomRepository;
        $this->prepositionRepository = $prepositionRepository;
        $this->verbeRepository = $verbeRepository;
    }

    /**
     * @param WordInterface $word
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function createWord(WordInterface $word): void
    {
        if($word instanceof Adjectif) {
            $this->adjectifRepository->save($word);
        }

        if($word instanceof ConjonctionCoordination) {
            $this->conjonctionCoordinationRepository->save($word);
        }

        if($word instanceof ConjonctionSubordination) {
            $this->conjonctionSubordinationRepository->save($word);
        }

        if($word instanceof Determinant) {
            $this->determinantRepository->save($word);
        }

        if($word instanceof Nom) {
            $this->nomRepository->save($word);
        }

        if($word instanceof Preposition) {
            $this->prepositionRepository->save($word);
        }

        if($word instanceof Verbe) {
            $this->verbeRepository->save($word);
        }
    }
}