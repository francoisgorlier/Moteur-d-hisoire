<?php

namespace App\DataFixtures;

use App\Repository\PrimaryElementRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Yaml\Yaml;

class AppFixtures extends Fixture
{
/**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var PrimaryElementRepository
     */
    private $primaryElementRepository;

    /**
     * AppFixtures constructor.
     * @param PrimaryElementRepository $wordRepository
     */
    public function __construct(PrimaryElementRepository $primaryElementRepository)
    {
        $this->serializer = new Serializer([new ObjectNormalizer()]);

        $this->primaryElementRepository = $primaryElementRepository;
    }

    public function load(ObjectManager $manager)
    {
        $primaryElements = $this->getPrimaryElementFromYml();

        foreach($primaryElements as $entityName => $entities) {
            foreach($entities as $entity) {
                $primaryElements = $this->serializer->denormalize($entity, $entityName);
                $this->primaryElementRepository->save($primaryElements);
            }
        }

    }

    public function getPrimaryElementFromYml()
    {
        $yaml = new Yaml();

        return $yaml->parseFile('fixtures/primaryElement.yaml');
    }
}
