<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

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

class EnvironmentEnvironmentsIdVariablesGetLdjsonResponse200HydraViewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Gyroscops\\Api\\Model\\EnvironmentEnvironmentsIdVariablesGetLdjsonResponse200HydraView';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\EnvironmentEnvironmentsIdVariablesGetLdjsonResponse200HydraView';
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\EnvironmentEnvironmentsIdVariablesGetLdjsonResponse200HydraView();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@id', $data) && $data['@id'] !== null) {
            $object->setId($data['@id']);
            unset($data['@id']);
        } elseif (\array_key_exists('@id', $data) && $data['@id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('@type', $data) && $data['@type'] !== null) {
            $object->setType($data['@type']);
            unset($data['@type']);
        } elseif (\array_key_exists('@type', $data) && $data['@type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('hydra:first', $data) && $data['hydra:first'] !== null) {
            $object->setHydraFirst($data['hydra:first']);
            unset($data['hydra:first']);
        } elseif (\array_key_exists('hydra:first', $data) && $data['hydra:first'] === null) {
            $object->setHydraFirst(null);
        }
        if (\array_key_exists('hydra:last', $data) && $data['hydra:last'] !== null) {
            $object->setHydraLast($data['hydra:last']);
            unset($data['hydra:last']);
        } elseif (\array_key_exists('hydra:last', $data) && $data['hydra:last'] === null) {
            $object->setHydraLast(null);
        }
        if (\array_key_exists('hydra:previous', $data) && $data['hydra:previous'] !== null) {
            $object->setHydraPrevious($data['hydra:previous']);
            unset($data['hydra:previous']);
        } elseif (\array_key_exists('hydra:previous', $data) && $data['hydra:previous'] === null) {
            $object->setHydraPrevious(null);
        }
        if (\array_key_exists('hydra:next', $data) && $data['hydra:next'] !== null) {
            $object->setHydraNext($data['hydra:next']);
            unset($data['hydra:next']);
        } elseif (\array_key_exists('hydra:next', $data) && $data['hydra:next'] === null) {
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
