<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Normalizer;

use Gyroscops\Api\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BigIntegerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === \Gyroscops\Api\Model\BigInteger::class;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data::class === \Gyroscops\Api\Model\BigInteger::class;
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
        $object = new \Gyroscops\Api\Model\BigInteger();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bitLength', $data) && $data['bitLength'] !== null) {
            $object->setBitLength($data['bitLength']);
        } elseif (\array_key_exists('bitLength', $data) && $data['bitLength'] === null) {
            $object->setBitLength(null);
        }
        if (\array_key_exists('lowestSetBit', $data) && $data['lowestSetBit'] !== null) {
            $object->setLowestSetBit($data['lowestSetBit']);
        } elseif (\array_key_exists('lowestSetBit', $data) && $data['lowestSetBit'] === null) {
            $object->setLowestSetBit(null);
        }
        if (\array_key_exists('even', $data) && $data['even'] !== null) {
            $object->setEven($data['even']);
        } elseif (\array_key_exists('even', $data) && $data['even'] === null) {
            $object->setEven(null);
        }
        if (\array_key_exists('odd', $data) && $data['odd'] !== null) {
            $object->setOdd($data['odd']);
        } elseif (\array_key_exists('odd', $data) && $data['odd'] === null) {
            $object->setOdd(null);
        }
        if (\array_key_exists('sign', $data) && $data['sign'] !== null) {
            $object->setSign($data['sign']);
        } elseif (\array_key_exists('sign', $data) && $data['sign'] === null) {
            $object->setSign(null);
        }
        if (\array_key_exists('zero', $data) && $data['zero'] !== null) {
            $object->setZero($data['zero']);
        } elseif (\array_key_exists('zero', $data) && $data['zero'] === null) {
            $object->setZero(null);
        }
        if (\array_key_exists('negative', $data) && $data['negative'] !== null) {
            $object->setNegative($data['negative']);
        } elseif (\array_key_exists('negative', $data) && $data['negative'] === null) {
            $object->setNegative(null);
        }
        if (\array_key_exists('negativeOrZero', $data) && $data['negativeOrZero'] !== null) {
            $object->setNegativeOrZero($data['negativeOrZero']);
        } elseif (\array_key_exists('negativeOrZero', $data) && $data['negativeOrZero'] === null) {
            $object->setNegativeOrZero(null);
        }
        if (\array_key_exists('positive', $data) && $data['positive'] !== null) {
            $object->setPositive($data['positive']);
        } elseif (\array_key_exists('positive', $data) && $data['positive'] === null) {
            $object->setPositive(null);
        }
        if (\array_key_exists('positiveOrZero', $data) && $data['positiveOrZero'] !== null) {
            $object->setPositiveOrZero($data['positiveOrZero']);
        } elseif (\array_key_exists('positiveOrZero', $data) && $data['positiveOrZero'] === null) {
            $object->setPositiveOrZero(null);
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
