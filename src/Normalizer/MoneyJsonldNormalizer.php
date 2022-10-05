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

class MoneyJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\MoneyJsonld' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\MoneyJsonld' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\MoneyJsonld();
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
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($this->denormalizer->denormalize($data['amount'], 'Gyroscops\\Api\\Model\\BigDecimalJsonld', 'json', $context));
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($this->denormalizer->denormalize($data['currency'], 'Gyroscops\\Api\\Model\\CurrencyJsonld', 'json', $context));
        }
        if (\array_key_exists('context', $data)) {
            $object->setContext2($this->denormalizer->denormalize($data['context'], 'Gyroscops\\Api\\Model\\ContextJsonld', 'json', $context));
        }
        if (\array_key_exists('minorAmount', $data)) {
            $object->setMinorAmount($this->denormalizer->denormalize($data['minorAmount'], 'Gyroscops\\Api\\Model\\BigDecimalJsonld', 'json', $context));
        }
        if (\array_key_exists('unscaledAmount', $data)) {
            $object->setUnscaledAmount($this->denormalizer->denormalize($data['unscaledAmount'], 'Gyroscops\\Api\\Model\\BigIntegerJsonld', 'json', $context));
        }
        if (\array_key_exists('amounts', $data)) {
            $values = [];
            foreach ($data['amounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Api\\Model\\BigNumberJsonld', 'json', $context);
            }
            $object->setAmounts($values);
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
        if (null !== $object->getAmount()) {
            $data['amount'] = $this->normalizer->normalize($object->getAmount(), 'json', $context);
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $this->normalizer->normalize($object->getCurrency(), 'json', $context);
        }
        if (null !== $object->getContext2()) {
            $data['context'] = $this->normalizer->normalize($object->getContext2(), 'json', $context);
        }
        if (null !== $object->getMinorAmount()) {
            $data['minorAmount'] = $this->normalizer->normalize($object->getMinorAmount(), 'json', $context);
        }
        if (null !== $object->getUnscaledAmount()) {
            $data['unscaledAmount'] = $this->normalizer->normalize($object->getUnscaledAmount(), 'json', $context);
        }

        return $data;
    }
}
