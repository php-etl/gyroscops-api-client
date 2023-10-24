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

class RuntimeExecutionsWorkflowsJobsGetLdjsonResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Gyroscops\\Api\\Model\\RuntimeExecutionsWorkflowsJobsGetLdjsonResponse200';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\RuntimeExecutionsWorkflowsJobsGetLdjsonResponse200';
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
        $object = new \Gyroscops\Api\Model\RuntimeExecutionsWorkflowsJobsGetLdjsonResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('hydra:member', $data) && $data['hydra:member'] !== null) {
            $values = [];
            foreach ($data['hydra:member'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Api\\Model\\ExecutionWorkflowJobJsonld', 'json', $context);
            }
            $object->setHydraMember($values);
            unset($data['hydra:member']);
        } elseif (\array_key_exists('hydra:member', $data) && $data['hydra:member'] === null) {
            $object->setHydraMember(null);
        }
        if (\array_key_exists('hydra:totalItems', $data) && $data['hydra:totalItems'] !== null) {
            $object->setHydraTotalItems($data['hydra:totalItems']);
            unset($data['hydra:totalItems']);
        } elseif (\array_key_exists('hydra:totalItems', $data) && $data['hydra:totalItems'] === null) {
            $object->setHydraTotalItems(null);
        }
        if (\array_key_exists('hydra:view', $data) && $data['hydra:view'] !== null) {
            $object->setHydraView($this->denormalizer->denormalize($data['hydra:view'], 'Gyroscops\\Api\\Model\\RuntimeExecutionsWorkflowsJobsGetLdjsonResponse200HydraView', 'json', $context));
            unset($data['hydra:view']);
        } elseif (\array_key_exists('hydra:view', $data) && $data['hydra:view'] === null) {
            $object->setHydraView(null);
        }
        if (\array_key_exists('hydra:search', $data) && $data['hydra:search'] !== null) {
            $object->setHydraSearch($this->denormalizer->denormalize($data['hydra:search'], 'Gyroscops\\Api\\Model\\RuntimeExecutionsWorkflowsJobsGetLdjsonResponse200HydraSearch', 'json', $context));
            unset($data['hydra:search']);
        } elseif (\array_key_exists('hydra:search', $data) && $data['hydra:search'] === null) {
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
