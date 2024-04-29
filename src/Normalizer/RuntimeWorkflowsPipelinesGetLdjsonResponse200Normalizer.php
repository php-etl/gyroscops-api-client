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

class RuntimeWorkflowsPipelinesGetLdjsonResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\RuntimeWorkflowsPipelinesGetLdjsonResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\RuntimeWorkflowsPipelinesGetLdjsonResponse200' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\RuntimeWorkflowsPipelinesGetLdjsonResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('hydra:member', $data) && null !== $data['hydra:member']) {
            $values = [];
            foreach ($data['hydra:member'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Api\\Model\\WorkflowJobPipelineJsonldPipelineRead', 'json', $context);
            }
            $object->setHydraMember($values);
            unset($data['hydra:member']);
        } elseif (\array_key_exists('hydra:member', $data) && null === $data['hydra:member']) {
            $object->setHydraMember(null);
        }
        if (\array_key_exists('hydra:totalItems', $data) && null !== $data['hydra:totalItems']) {
            $object->setHydraTotalItems($data['hydra:totalItems']);
            unset($data['hydra:totalItems']);
        } elseif (\array_key_exists('hydra:totalItems', $data) && null === $data['hydra:totalItems']) {
            $object->setHydraTotalItems(null);
        }
        if (\array_key_exists('hydra:view', $data) && null !== $data['hydra:view']) {
            $object->setHydraView($this->denormalizer->denormalize($data['hydra:view'], 'Gyroscops\\Api\\Model\\RuntimeWorkflowsPipelinesGetLdjsonResponse200HydraView', 'json', $context));
            unset($data['hydra:view']);
        } elseif (\array_key_exists('hydra:view', $data) && null === $data['hydra:view']) {
            $object->setHydraView(null);
        }
        if (\array_key_exists('hydra:search', $data) && null !== $data['hydra:search']) {
            $object->setHydraSearch($this->denormalizer->denormalize($data['hydra:search'], 'Gyroscops\\Api\\Model\\RuntimeWorkflowsPipelinesGetLdjsonResponse200HydraSearch', 'json', $context));
            unset($data['hydra:search']);
        } elseif (\array_key_exists('hydra:search', $data) && null === $data['hydra:search']) {
            $object->setHydraSearch(null);
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
        $values = [];
        foreach ($object->getHydraMember() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['hydra:member'] = $values;
        if ($object->isInitialized('hydraTotalItems') && null !== $object->getHydraTotalItems()) {
            $data['hydra:totalItems'] = $object->getHydraTotalItems();
        }
        if ($object->isInitialized('hydraView') && null !== $object->getHydraView()) {
            $data['hydra:view'] = $this->normalizer->normalize($object->getHydraView(), 'json', $context);
        }
        if ($object->isInitialized('hydraSearch') && null !== $object->getHydraSearch()) {
            $data['hydra:search'] = $this->normalizer->normalize($object->getHydraSearch(), 'json', $context);
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }
}
