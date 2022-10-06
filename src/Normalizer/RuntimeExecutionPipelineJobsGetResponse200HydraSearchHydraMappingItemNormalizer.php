<?php

namespace Gyroscops\Api\Normalizer;

use Gyroscops\Api\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RuntimeExecutionPipelineJobsGetResponse200HydraSearchHydraMappingItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\RuntimeExecutionPipelineJobsGetResponse200HydraSearchHydraMappingItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\RuntimeExecutionPipelineJobsGetResponse200HydraSearchHydraMappingItem' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\RuntimeExecutionPipelineJobsGetResponse200HydraSearchHydraMappingItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@type', $data) && null !== $data['@type']) {
            $object->setType($data['@type']);
        } elseif (\array_key_exists('@type', $data) && null === $data['@type']) {
            $object->setType(null);
        }
        if (\array_key_exists('variable', $data) && null !== $data['variable']) {
            $object->setVariable($data['variable']);
        } elseif (\array_key_exists('variable', $data) && null === $data['variable']) {
            $object->setVariable(null);
        }
        if (\array_key_exists('property', $data) && null !== $data['property']) {
            $object->setProperty($data['property']);
        } elseif (\array_key_exists('property', $data) && null === $data['property']) {
            $object->setProperty(null);
        }
        if (\array_key_exists('required', $data) && null !== $data['required']) {
            $object->setRequired($data['required']);
        } elseif (\array_key_exists('required', $data) && null === $data['required']) {
            $object->setRequired(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getType()) {
            $data['@type'] = $object->getType();
        }
        if (null !== $object->getVariable()) {
            $data['variable'] = $object->getVariable();
        }
        if (null !== $object->getProperty()) {
            $data['property'] = $object->getProperty();
        }
        if (null !== $object->getRequired()) {
            $data['required'] = $object->getRequired();
        }

        return $data;
    }
}
