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

class ConfigMapValueInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\ConfigMapValueInput' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\ConfigMapValueInput' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\ConfigMapValueInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('arrayCopy', $data) && null !== $data['arrayCopy']) {
            $object->setArrayCopy($data['arrayCopy']);
        } elseif (\array_key_exists('arrayCopy', $data) && null === $data['arrayCopy']) {
            $object->setArrayCopy(null);
        }
        if (\array_key_exists('flags', $data) && null !== $data['flags']) {
            $object->setFlags($data['flags']);
        } elseif (\array_key_exists('flags', $data) && null === $data['flags']) {
            $object->setFlags(null);
        }
        if (\array_key_exists('iterator', $data) && null !== $data['iterator']) {
            $object->setIterator($data['iterator']);
        } elseif (\array_key_exists('iterator', $data) && null === $data['iterator']) {
            $object->setIterator(null);
        }
        if (\array_key_exists('iteratorClass', $data) && null !== $data['iteratorClass']) {
            $object->setIteratorClass($data['iteratorClass']);
        } elseif (\array_key_exists('iteratorClass', $data) && null === $data['iteratorClass']) {
            $object->setIteratorClass(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getFlags()) {
            $data['flags'] = $object->getFlags();
        }
        if (null !== $object->getIteratorClass()) {
            $data['iteratorClass'] = $object->getIteratorClass();
        }

        return $data;
    }
}
