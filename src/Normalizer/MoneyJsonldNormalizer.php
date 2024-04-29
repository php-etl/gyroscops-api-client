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

class MoneyJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\MoneyJsonld' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\MoneyJsonld' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\MoneyJsonld();
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
        if (\array_key_exists('amount', $data) && null !== $data['amount']) {
            $object->setAmount($this->denormalizer->denormalize($data['amount'], 'Gyroscops\\Api\\Model\\BigDecimalJsonld', 'json', $context));
            unset($data['amount']);
        } elseif (\array_key_exists('amount', $data) && null === $data['amount']) {
            $object->setAmount(null);
        }
        if (\array_key_exists('currency', $data) && null !== $data['currency']) {
            $object->setCurrency($this->denormalizer->denormalize($data['currency'], 'Gyroscops\\Api\\Model\\CurrencyJsonld', 'json', $context));
            unset($data['currency']);
        } elseif (\array_key_exists('currency', $data) && null === $data['currency']) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('context', $data) && null !== $data['context']) {
            $object->setContext2($this->denormalizer->denormalize($data['context'], 'Gyroscops\\Api\\Model\\ContextJsonld', 'json', $context));
            unset($data['context']);
        } elseif (\array_key_exists('context', $data) && null === $data['context']) {
            $object->setContext2(null);
        }
        if (\array_key_exists('minorAmount', $data) && null !== $data['minorAmount']) {
            $object->setMinorAmount($this->denormalizer->denormalize($data['minorAmount'], 'Gyroscops\\Api\\Model\\BigDecimalJsonld', 'json', $context));
            unset($data['minorAmount']);
        } elseif (\array_key_exists('minorAmount', $data) && null === $data['minorAmount']) {
            $object->setMinorAmount(null);
        }
        if (\array_key_exists('unscaledAmount', $data) && null !== $data['unscaledAmount']) {
            $object->setUnscaledAmount($this->denormalizer->denormalize($data['unscaledAmount'], 'Gyroscops\\Api\\Model\\BigIntegerJsonld', 'json', $context));
            unset($data['unscaledAmount']);
        } elseif (\array_key_exists('unscaledAmount', $data) && null === $data['unscaledAmount']) {
            $object->setUnscaledAmount(null);
        }
        if (\array_key_exists('amounts', $data) && null !== $data['amounts']) {
            $values = [];
            foreach ($data['amounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Api\\Model\\BigNumberJsonld', 'json', $context);
            }
            $object->setAmounts($values);
            unset($data['amounts']);
        } elseif (\array_key_exists('amounts', $data) && null === $data['amounts']) {
            $object->setAmounts(null);
        }
        if (\array_key_exists('sign', $data) && null !== $data['sign']) {
            $object->setSign($data['sign']);
            unset($data['sign']);
        } elseif (\array_key_exists('sign', $data) && null === $data['sign']) {
            $object->setSign(null);
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
        if ($object->isInitialized('context2') && null !== $object->getContext2()) {
            $data['context'] = $this->normalizer->normalize($object->getContext2(), 'json', $context);
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
