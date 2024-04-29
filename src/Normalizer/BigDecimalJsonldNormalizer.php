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

class BigDecimalJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\BigDecimalJsonld' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\BigDecimalJsonld' === $data::class;
    }

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
        if (\array_key_exists('@context', $data) && null !== $data['@context']) {
            $object->setContext($data['@context']);
            unset($data['@context']);
        } elseif (\array_key_exists('@context', $data) && null === $data['@context']) {
            $object->setContext(null);
        }
        if (\array_key_exists('@id', $data) && null !== $data['@id']) {
            $object->setId($data['@id']);
            unset($data['@id']);
        } elseif (\array_key_exists('@id', $data) && null === $data['@id']) {
            $object->setId(null);
        }
        if (\array_key_exists('@type', $data) && null !== $data['@type']) {
            $object->setType($data['@type']);
            unset($data['@type']);
        } elseif (\array_key_exists('@type', $data) && null === $data['@type']) {
            $object->setType(null);
        }
        if (\array_key_exists('scale', $data) && null !== $data['scale']) {
            $object->setScale($data['scale']);
            unset($data['scale']);
        } elseif (\array_key_exists('scale', $data) && null === $data['scale']) {
            $object->setScale(null);
        }
        if (\array_key_exists('sign', $data) && null !== $data['sign']) {
            $object->setSign($data['sign']);
            unset($data['sign']);
        } elseif (\array_key_exists('sign', $data) && null === $data['sign']) {
            $object->setSign(null);
        }
        if (\array_key_exists('unscaledValue', $data) && null !== $data['unscaledValue']) {
            $object->setUnscaledValue($this->denormalizer->denormalize($data['unscaledValue'], 'Gyroscops\\Api\\Model\\BigIntegerJsonld', 'json', $context));
            unset($data['unscaledValue']);
        } elseif (\array_key_exists('unscaledValue', $data) && null === $data['unscaledValue']) {
            $object->setUnscaledValue(null);
        }
        if (\array_key_exists('integralPart', $data) && null !== $data['integralPart']) {
            $object->setIntegralPart($data['integralPart']);
            unset($data['integralPart']);
        } elseif (\array_key_exists('integralPart', $data) && null === $data['integralPart']) {
            $object->setIntegralPart(null);
        }
        if (\array_key_exists('fractionalPart', $data) && null !== $data['fractionalPart']) {
            $object->setFractionalPart($data['fractionalPart']);
            unset($data['fractionalPart']);
        } elseif (\array_key_exists('fractionalPart', $data) && null === $data['fractionalPart']) {
            $object->setFractionalPart(null);
        }
        if (\array_key_exists('nonZeroFractionalPart', $data) && null !== $data['nonZeroFractionalPart']) {
            $object->setNonZeroFractionalPart($data['nonZeroFractionalPart']);
            unset($data['nonZeroFractionalPart']);
        } elseif (\array_key_exists('nonZeroFractionalPart', $data) && null === $data['nonZeroFractionalPart']) {
            $object->setNonZeroFractionalPart(null);
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
        if ($object->isInitialized('unscaledValue') && null !== $object->getUnscaledValue()) {
            $data['unscaledValue'] = $this->normalizer->normalize($object->getUnscaledValue(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
