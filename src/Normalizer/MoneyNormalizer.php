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

class MoneyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Gyroscops\\Api\\Model\\Money';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\Money';
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
        $object = new \Gyroscops\Api\Model\Money();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($this->denormalizer->denormalize($data['amount'], 'Gyroscops\\Api\\Model\\BigDecimal', 'json', $context));
            unset($data['amount']);
        } elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('currency', $data) && $data['currency'] !== null) {
            $object->setCurrency($this->denormalizer->denormalize($data['currency'], 'Gyroscops\\Api\\Model\\Currency', 'json', $context));
            unset($data['currency']);
        } elseif (\array_key_exists('currency', $data) && $data['currency'] === null) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('context', $data) && $data['context'] !== null) {
            $object->setContext($this->denormalizer->denormalize($data['context'], 'Gyroscops\\Api\\Model\\Context', 'json', $context));
            unset($data['context']);
        } elseif (\array_key_exists('context', $data) && $data['context'] === null) {
            $object->setContext(null);
        }
        if (\array_key_exists('minorAmount', $data) && $data['minorAmount'] !== null) {
            $object->setMinorAmount($this->denormalizer->denormalize($data['minorAmount'], 'Gyroscops\\Api\\Model\\BigDecimal', 'json', $context));
            unset($data['minorAmount']);
        } elseif (\array_key_exists('minorAmount', $data) && $data['minorAmount'] === null) {
            $object->setMinorAmount(null);
        }
        if (\array_key_exists('unscaledAmount', $data) && $data['unscaledAmount'] !== null) {
            $object->setUnscaledAmount($this->denormalizer->denormalize($data['unscaledAmount'], 'Gyroscops\\Api\\Model\\BigInteger', 'json', $context));
            unset($data['unscaledAmount']);
        } elseif (\array_key_exists('unscaledAmount', $data) && $data['unscaledAmount'] === null) {
            $object->setUnscaledAmount(null);
        }
        if (\array_key_exists('amounts', $data) && $data['amounts'] !== null) {
            $values = [];
            foreach ($data['amounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Api\\Model\\BigNumber', 'json', $context);
            }
            $object->setAmounts($values);
            unset($data['amounts']);
        } elseif (\array_key_exists('amounts', $data) && $data['amounts'] === null) {
            $object->setAmounts(null);
        }
        if (\array_key_exists('sign', $data) && $data['sign'] !== null) {
            $object->setSign($data['sign']);
            unset($data['sign']);
        } elseif (\array_key_exists('sign', $data) && $data['sign'] === null) {
            $object->setSign(null);
        }
        if (\array_key_exists('zero', $data) && $data['zero'] !== null) {
            $object->setZero($data['zero']);
            unset($data['zero']);
        } elseif (\array_key_exists('zero', $data) && $data['zero'] === null) {
            $object->setZero(null);
        }
        if (\array_key_exists('negative', $data) && $data['negative'] !== null) {
            $object->setNegative($data['negative']);
            unset($data['negative']);
        } elseif (\array_key_exists('negative', $data) && $data['negative'] === null) {
            $object->setNegative(null);
        }
        if (\array_key_exists('negativeOrZero', $data) && $data['negativeOrZero'] !== null) {
            $object->setNegativeOrZero($data['negativeOrZero']);
            unset($data['negativeOrZero']);
        } elseif (\array_key_exists('negativeOrZero', $data) && $data['negativeOrZero'] === null) {
            $object->setNegativeOrZero(null);
        }
        if (\array_key_exists('positive', $data) && $data['positive'] !== null) {
            $object->setPositive($data['positive']);
            unset($data['positive']);
        } elseif (\array_key_exists('positive', $data) && $data['positive'] === null) {
            $object->setPositive(null);
        }
        if (\array_key_exists('positiveOrZero', $data) && $data['positiveOrZero'] !== null) {
            $object->setPositiveOrZero($data['positiveOrZero']);
            unset($data['positiveOrZero']);
        } elseif (\array_key_exists('positiveOrZero', $data) && $data['positiveOrZero'] === null) {
            $object->setPositiveOrZero(null);
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
        if ($object->isInitialized('amount') && null !== $object->getAmount()) {
            $data['amount'] = $this->normalizer->normalize($object->getAmount(), 'json', $context);
        }
        if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
            $data['currency'] = $this->normalizer->normalize($object->getCurrency(), 'json', $context);
        }
        if ($object->isInitialized('context') && null !== $object->getContext()) {
            $data['context'] = $this->normalizer->normalize($object->getContext(), 'json', $context);
        }
        if ($object->isInitialized('minorAmount') && null !== $object->getMinorAmount()) {
            $data['minorAmount'] = $this->normalizer->normalize($object->getMinorAmount(), 'json', $context);
        }
        if ($object->isInitialized('unscaledAmount') && null !== $object->getUnscaledAmount()) {
            $data['unscaledAmount'] = $this->normalizer->normalize($object->getUnscaledAmount(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
