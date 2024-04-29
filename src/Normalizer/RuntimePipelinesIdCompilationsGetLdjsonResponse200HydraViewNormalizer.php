<?php

declare(strict_types=1);

namespace Gyroscops\Api\Normalizer;

use Gyroscops\Api\Runtime\Normalizer\CheckArray;
use Gyroscops\Api\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RuntimePipelinesIdCompilationsGetLdjsonResponse200HydraViewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\RuntimePipelinesIdCompilationsGetLdjsonResponse200HydraView' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\RuntimePipelinesIdCompilationsGetLdjsonResponse200HydraView' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\RuntimePipelinesIdCompilationsGetLdjsonResponse200HydraView();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@id', $data) && null !== $data['@id']) {
            $object->setId($data['@id']);
            unset($data['@id']);
        } elseif (\array_key_exists('@id', $data) && null === $data['@id']) {
            $object->setId(null);
        }
        if (\array_key_exists('@type', $data) && null !== $data['@type']) {
            $object->setType($data['@type']);
            unset($data['@type']);
        } elseif (\array_key_exists('@type', $data) && null === $data['@type']) {
            $object->setType(null);
        }
        if (\array_key_exists('hydra:first', $data) && null !== $data['hydra:first']) {
            $object->setHydraFirst($data['hydra:first']);
            unset($data['hydra:first']);
        } elseif (\array_key_exists('hydra:first', $data) && null === $data['hydra:first']) {
            $object->setHydraFirst(null);
        }
        if (\array_key_exists('hydra:last', $data) && null !== $data['hydra:last']) {
            $object->setHydraLast($data['hydra:last']);
            unset($data['hydra:last']);
        } elseif (\array_key_exists('hydra:last', $data) && null === $data['hydra:last']) {
            $object->setHydraLast(null);
        }
        if (\array_key_exists('hydra:previous', $data) && null !== $data['hydra:previous']) {
            $object->setHydraPrevious($data['hydra:previous']);
            unset($data['hydra:previous']);
        } elseif (\array_key_exists('hydra:previous', $data) && null === $data['hydra:previous']) {
            $object->setHydraPrevious(null);
        }
        if (\array_key_exists('hydra:next', $data) && null !== $data['hydra:next']) {
            $object->setHydraNext($data['hydra:next']);
            unset($data['hydra:next']);
        } elseif (\array_key_exists('hydra:next', $data) && null === $data['hydra:next']) {
            $object->setHydraNext(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['@id'] = $object->getId();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['@type'] = $object->getType();
        }
        if ($object->isInitialized('hydraFirst') && null !== $object->getHydraFirst()) {
            $data['hydra:first'] = $object->getHydraFirst();
        }
        if ($object->isInitialized('hydraLast') && null !== $object->getHydraLast()) {
            $data['hydra:last'] = $object->getHydraLast();
        }
        if ($object->isInitialized('hydraPrevious') && null !== $object->getHydraPrevious()) {
            $data['hydra:previous'] = $object->getHydraPrevious();
        }
        if ($object->isInitialized('hydraNext') && null !== $object->getHydraNext()) {
            $data['hydra:next'] = $object->getHydraNext();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
