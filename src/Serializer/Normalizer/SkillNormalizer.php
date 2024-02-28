<?php

namespace App\Serializer\Normalizer;

use App\Entity\Skill;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Vich\UploaderBundle\Storage\StorageInterface;

class SkillNormalizer implements NormalizerInterface
{
    private const ALREADY_CALLED = 'SKILL_NORMALIZER_ALREADY_CALLED';

    public function __construct(
        private StorageInterface $storage,
        #[Autowire(service: 'api_platform.jsonld.normalizer.item')]
        private readonly NormalizerInterface $normalizer,
    ) {}

    public function normalize($object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $context[self::ALREADY_CALLED] = true;

        $object->setIcon(
            $this->storage->resolveUri($object, 'file')
        );

        
        return $this->normalizer->normalize($object, $format, $context);
    }

    public function supportsNormalization($data, ?string $format = null, array $context = []): bool
    {
        if (isset($context[self::ALREADY_CALLED])) {
            return false;
        }

        return $data instanceof Skill;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            Skill::class => true,
        ];
    }
}
