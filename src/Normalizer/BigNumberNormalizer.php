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

class BigNumberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\BigNumber' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\BigNumber' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\BigNumber();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('zero', $data) && null !== $data['zero']) {
            $object->setZero($data['zero']);
            unset($data['zero']);
        } elseif (\array_key_exists('zero', $data) && null === $data['zero']) {
            $object->setZero(null);
        }
        if (\array_key_exists('negative', $data) && null !== $data['negative']) {
            $object->setNegative($data['negative']);
            unset($data['negative']);
        } elseif (\array_key_exists('negative', $data) && null === $data['negative']) {
            $object->setNegative(null);
        }
        if (\array_key_exists('negativeOrZero', $data) && null !== $data['negativeOrZero']) {
            $object->setNegativeOrZero($data['negativeOrZero']);
            unset($data['negativeOrZero']);
        } elseif (\array_key_exists('negativeOrZero', $data) && null === $data['negativeOrZero']) {
            $object->setNegativeOrZero(null);
        }
        if (\array_key_exists('positive', $data) && null !== $data['positive']) {
            $object->setPositive($data['positive']);
            unset($data['positive']);
        } elseif (\array_key_exists('positive', $data) && null === $data['positive']) {
            $object->setPositive(null);
        }
        if (\array_key_exists('positiveOrZero', $data) && null !== $data['positiveOrZero']) {
            $object->setPositiveOrZero($data['positiveOrZero']);
            unset($data['positiveOrZero']);
        } elseif (\array_key_exists('positiveOrZero', $data) && null === $data['positiveOrZero']) {
            $object->setPositiveOrZero(null);
        }
        if (\array_key_exists('sign', $data) && null !== $data['sign']) {
            $object->setSign($data['sign']);
            unset($data['sign']);
        } elseif (\array_key_exists('sign', $data) && null === $data['sign']) {
            $object->setSign(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
