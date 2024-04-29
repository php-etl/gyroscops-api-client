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

class SubscriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\Subscription' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\Subscription' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\Subscription();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('organization', $data) && null !== $data['organization']) {
            $object->setOrganization($data['organization']);
            unset($data['organization']);
        } elseif (\array_key_exists('organization', $data) && null === $data['organization']) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('offer', $data) && null !== $data['offer']) {
            $object->setOffer($data['offer']);
            unset($data['offer']);
        } elseif (\array_key_exists('offer', $data) && null === $data['offer']) {
            $object->setOffer(null);
        }
        if (\array_key_exists('options', $data) && null !== $data['options']) {
            $values = [];
            foreach ($data['options'] as $value) {
                $values[] = $value;
            }
            $object->setOptions($values);
            unset($data['options']);
        } elseif (\array_key_exists('options', $data) && null === $data['options']) {
            $object->setOptions(null);
        }
        if (\array_key_exists('cost', $data) && null !== $data['cost']) {
            $object->setCost($this->denormalizer->denormalize($data['cost'], 'Gyroscops\\Api\\Model\\Price', 'json', $context));
            unset($data['cost']);
        } elseif (\array_key_exists('cost', $data) && null === $data['cost']) {
            $object->setCost(null);
        }
        if (\array_key_exists('periods', $data) && null !== $data['periods']) {
            $values_1 = [];
            foreach ($data['periods'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPeriods($values_1);
            unset($data['periods']);
        } elseif (\array_key_exists('periods', $data) && null === $data['periods']) {
            $object->setPeriods(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        $data['organization'] = $object->getOrganization();
        if ($object->isInitialized('offer') && null !== $object->getOffer()) {
            $data['offer'] = $object->getOffer();
        }
        if ($object->isInitialized('options') && null !== $object->getOptions()) {
            $values = [];
            foreach ($object->getOptions() as $value) {
                $values[] = $value;
            }
            $data['options'] = $values;
        }
        if ($object->isInitialized('cost') && null !== $object->getCost()) {
            $data['cost'] = $this->normalizer->normalize($object->getCost(), 'json', $context);
        }
        if ($object->isInitialized('periods') && null !== $object->getPeriods()) {
            $values_1 = [];
            foreach ($object->getPeriods() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['periods'] = $values_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }
}
