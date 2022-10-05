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

class BigDecimalJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\BigDecimalJsonld' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\BigDecimalJsonld' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\BigDecimalJsonld();
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
        if (\array_key_exists('scale', $data)) {
            $object->setScale($data['scale']);
        }
        if (\array_key_exists('sign', $data)) {
            $object->setSign($data['sign']);
        }
        if (\array_key_exists('unscaledValue', $data)) {
            $object->setUnscaledValue($this->denormalizer->denormalize($data['unscaledValue'], 'Gyroscops\\Api\\Model\\BigIntegerJsonld', 'json', $context));
        }
        if (\array_key_exists('integralPart', $data)) {
            $object->setIntegralPart($data['integralPart']);
        }
        if (\array_key_exists('fractionalPart', $data)) {
            $object->setFractionalPart($data['fractionalPart']);
        }
        if (\array_key_exists('nonZeroFractionalPart', $data)) {
            $object->setNonZeroFractionalPart($data['nonZeroFractionalPart']);
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
        if (null !== $object->getUnscaledValue()) {
            $data['unscaledValue'] = $this->normalizer->normalize($object->getUnscaledValue(), 'json', $context);
        }

        return $data;
    }
}
