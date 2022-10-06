<?php

declare(strict_types=1);

namespace Gyroscops\Api\Normalizer;

use Gyroscops\Api\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BigDecimalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Gyroscops\\Api\\Model\\BigDecimal' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\BigDecimal' === $data::class;
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param mixed|null $format
     *
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
        $object = new \Gyroscops\Api\Model\BigDecimal();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('scale', $data) && null !== $data['scale']) {
            $object->setScale($data['scale']);
        } elseif (\array_key_exists('scale', $data) && null === $data['scale']) {
            $object->setScale(null);
        }
        if (\array_key_exists('sign', $data) && null !== $data['sign']) {
            $object->setSign($data['sign']);
        } elseif (\array_key_exists('sign', $data) && null === $data['sign']) {
            $object->setSign(null);
        }
        if (\array_key_exists('unscaledValue', $data) && null !== $data['unscaledValue']) {
            $object->setUnscaledValue($this->denormalizer->denormalize($data['unscaledValue'], 'Gyroscops\\Api\\Model\\BigInteger', 'json', $context));
        } elseif (\array_key_exists('unscaledValue', $data) && null === $data['unscaledValue']) {
            $object->setUnscaledValue(null);
        }
        if (\array_key_exists('integralPart', $data) && null !== $data['integralPart']) {
            $object->setIntegralPart($data['integralPart']);
        } elseif (\array_key_exists('integralPart', $data) && null === $data['integralPart']) {
            $object->setIntegralPart(null);
        }
        if (\array_key_exists('fractionalPart', $data) && null !== $data['fractionalPart']) {
            $object->setFractionalPart($data['fractionalPart']);
        } elseif (\array_key_exists('fractionalPart', $data) && null === $data['fractionalPart']) {
            $object->setFractionalPart(null);
        }
        if (\array_key_exists('nonZeroFractionalPart', $data) && null !== $data['nonZeroFractionalPart']) {
            $object->setNonZeroFractionalPart($data['nonZeroFractionalPart']);
        } elseif (\array_key_exists('nonZeroFractionalPart', $data) && null === $data['nonZeroFractionalPart']) {
            $object->setNonZeroFractionalPart(null);
        }
        if (\array_key_exists('zero', $data) && null !== $data['zero']) {
            $object->setZero($data['zero']);
        } elseif (\array_key_exists('zero', $data) && null === $data['zero']) {
            $object->setZero(null);
        }
        if (\array_key_exists('negative', $data) && null !== $data['negative']) {
            $object->setNegative($data['negative']);
        } elseif (\array_key_exists('negative', $data) && null === $data['negative']) {
            $object->setNegative(null);
        }
        if (\array_key_exists('negativeOrZero', $data) && null !== $data['negativeOrZero']) {
            $object->setNegativeOrZero($data['negativeOrZero']);
        } elseif (\array_key_exists('negativeOrZero', $data) && null === $data['negativeOrZero']) {
            $object->setNegativeOrZero(null);
        }
        if (\array_key_exists('positive', $data) && null !== $data['positive']) {
            $object->setPositive($data['positive']);
        } elseif (\array_key_exists('positive', $data) && null === $data['positive']) {
            $object->setPositive(null);
        }
        if (\array_key_exists('positiveOrZero', $data) && null !== $data['positiveOrZero']) {
            $object->setPositiveOrZero($data['positiveOrZero']);
        } elseif (\array_key_exists('positiveOrZero', $data) && null === $data['positiveOrZero']) {
            $object->setPositiveOrZero(null);
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
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
