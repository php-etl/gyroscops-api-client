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

class VariableFromSecretNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\VariableFromSecret' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\VariableFromSecret' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\VariableFromSecret();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('secret', $data) && null !== $data['secret']) {
            $object->setSecret($data['secret']);
        } elseif (\array_key_exists('secret', $data) && null === $data['secret']) {
            $object->setSecret(null);
        }
        if (\array_key_exists('item', $data) && null !== $data['item']) {
            $object->setItem($data['item']);
        } elseif (\array_key_exists('item', $data) && null === $data['item']) {
            $object->setItem(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('environment', $data) && null !== $data['environment']) {
            $object->setEnvironment($data['environment']);
        } elseif (\array_key_exists('environment', $data) && null === $data['environment']) {
            $object->setEnvironment(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getSecret()) {
            $data['secret'] = $object->getSecret();
        }
        if (null !== $object->getItem()) {
            $data['item'] = $object->getItem();
        }
        if (null !== $object->getEnvironment()) {
            $data['environment'] = $object->getEnvironment();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }

        return $data;
    }
}
