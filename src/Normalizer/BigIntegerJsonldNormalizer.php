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

class BigIntegerJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\BigIntegerJsonld' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\BigIntegerJsonld' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\BigIntegerJsonld();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@context', $data)) {
            $object->setContext($data['@context']);
        }
        if (\array_key_exists('@id', $data)) {
            $object->setId($data['@id']);
        }
        if (\array_key_exists('@type', $data)) {
            $object->setType($data['@type']);
        }
        if (\array_key_exists('bitLength', $data)) {
            $object->setBitLength($data['bitLength']);
        }
        if (\array_key_exists('lowestSetBit', $data)) {
            $object->setLowestSetBit($data['lowestSetBit']);
        }
        if (\array_key_exists('even', $data)) {
            $object->setEven($data['even']);
        }
        if (\array_key_exists('odd', $data)) {
            $object->setOdd($data['odd']);
        }
        if (\array_key_exists('sign', $data)) {
            $object->setSign($data['sign']);
        }
        if (\array_key_exists('zero', $data)) {
            $object->setZero($data['zero']);
        }
        if (\array_key_exists('negative', $data)) {
            $object->setNegative($data['negative']);
        }
        if (\array_key_exists('negativeOrZero', $data)) {
            $object->setNegativeOrZero($data['negativeOrZero']);
        }
        if (\array_key_exists('positive', $data)) {
            $object->setPositive($data['positive']);
        }
        if (\array_key_exists('positiveOrZero', $data)) {
            $object->setPositiveOrZero($data['positiveOrZero']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];

        return $data;
    }
}
