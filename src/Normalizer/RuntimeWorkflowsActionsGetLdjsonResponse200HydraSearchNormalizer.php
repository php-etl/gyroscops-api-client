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

class RuntimeWorkflowsActionsGetLdjsonResponse200HydraSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\RuntimeWorkflowsActionsGetLdjsonResponse200HydraSearch' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\RuntimeWorkflowsActionsGetLdjsonResponse200HydraSearch' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\RuntimeWorkflowsActionsGetLdjsonResponse200HydraSearch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@type', $data) && null !== $data['@type']) {
            $object->setType($data['@type']);
            unset($data['@type']);
        } elseif (\array_key_exists('@type', $data) && null === $data['@type']) {
            $object->setType(null);
        }
        if (\array_key_exists('hydra:template', $data) && null !== $data['hydra:template']) {
            $object->setHydraTemplate($data['hydra:template']);
            unset($data['hydra:template']);
        } elseif (\array_key_exists('hydra:template', $data) && null === $data['hydra:template']) {
            $object->setHydraTemplate(null);
        }
        if (\array_key_exists('hydra:variableRepresentation', $data) && null !== $data['hydra:variableRepresentation']) {
            $object->setHydraVariableRepresentation($data['hydra:variableRepresentation']);
            unset($data['hydra:variableRepresentation']);
        } elseif (\array_key_exists('hydra:variableRepresentation', $data) && null === $data['hydra:variableRepresentation']) {
            $object->setHydraVariableRepresentation(null);
        }
        if (\array_key_exists('hydra:mapping', $data) && null !== $data['hydra:mapping']) {
            $values = [];
            foreach ($data['hydra:mapping'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Api\\Model\\RuntimeWorkflowsActionsGetLdjsonResponse200HydraSearchHydraMappingItem', 'json', $context);
            }
            $object->setHydraMapping($values);
            unset($data['hydra:mapping']);
        } elseif (\array_key_exists('hydra:mapping', $data) && null === $data['hydra:mapping']) {
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
