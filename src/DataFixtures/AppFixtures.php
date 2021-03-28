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
    private const FIXTURES_TO_LOAD = [
        'fixtures/subject.yaml',
        'fixtures/verb.yaml',
        'fixtures/additionalContent.yaml'
    ];

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * AppFixtures constructor.
     */
    public function __construct()
    {
        $this->serializer = new Serializer([new ObjectNormalizer()]);
    }

    /**
     * @param ObjectManager $manager
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function load(ObjectManager $manager): void
    {
        foreach (self::FIXTURES_TO_LOAD as $file) {
            $words = $this->getElementFromYml($file);
            $this->save($words);
        }
    }

    /**
     * Denormalize data and save
     *
     * @param array $primaryElements
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function save(array $primaryElements) : void
    {
        foreach($primaryElements as $entityName => $entities) {
            foreach($entities as $entity) {
                $primaryElements = $this->serializer->denormalize($entity, $entityName);
               // $this->primaryElementRepository->save($primaryElements);
            }
        }
    }

    /**
     * Get fixtures from configs
     *
     * @param string $file
     * @return array
     */
    public function getElementFromYml(string $file): array
    {
        $yaml = new Yaml();

        return $yaml->parseFile($file);
    }
}
