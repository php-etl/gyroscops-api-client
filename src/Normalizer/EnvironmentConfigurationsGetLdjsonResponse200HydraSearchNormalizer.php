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

class EnvironmentConfigurationsGetLdjsonResponse200HydraSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Gyroscops\\Api\\Model\\EnvironmentConfigurationsGetLdjsonResponse200HydraSearch';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\EnvironmentConfigurationsGetLdjsonResponse200HydraSearch';
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
        $object = new \Gyroscops\Api\Model\EnvironmentConfigurationsGetLdjsonResponse200HydraSearch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@type', $data) && $data['@type'] !== null) {
            $object->setType($data['@type']);
            unset($data['@type']);
        } elseif (\array_key_exists('@type', $data) && $data['@type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('hydra:template', $data) && $data['hydra:template'] !== null) {
            $object->setHydraTemplate($data['hydra:template']);
            unset($data['hydra:template']);
        } elseif (\array_key_exists('hydra:template', $data) && $data['hydra:template'] === null) {
            $object->setHydraTemplate(null);
        }
        if (\array_key_exists('hydra:variableRepresentation', $data) && $data['hydra:variableRepresentation'] !== null) {
            $object->setHydraVariableRepresentation($data['hydra:variableRepresentation']);
            unset($data['hydra:variableRepresentation']);
        } elseif (\array_key_exists('hydra:variableRepresentation', $data) && $data['hydra:variableRepresentation'] === null) {
            $object->setHydraVariableRepresentation(null);
        }
        if (\array_key_exists('hydra:mapping', $data) && $data['hydra:mapping'] !== null) {
            $values = [];
            foreach ($data['hydra:mapping'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Api\\Model\\EnvironmentConfigurationsGetLdjsonResponse200HydraSearchHydraMappingItem', 'json', $context);
            }
            $object->setHydraMapping($values);
            unset($data['hydra:mapping']);
        } elseif (\array_key_exists('hydra:mapping', $data) && $data['hydra:mapping'] === null) {
            $object->setHydraMapping(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['@type'] = $object->getType();
        }
        if ($object->isInitialized('hydraTemplate') && null !== $object->getHydraTemplate()) {
            $data['hydra:template'] = $object->getHydraTemplate();
        }
        if ($object->isInitialized('hydraVariableRepresentation') && null !== $object->getHydraVariableRepresentation()) {
            $data['hydra:variableRepresentation'] = $object->getHydraVariableRepresentation();
        }
        if ($object->isInitialized('hydraMapping') && null !== $object->getHydraMapping()) {
            $values = [];
            foreach ($object->getHydraMapping() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['hydra:mapping'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }
}