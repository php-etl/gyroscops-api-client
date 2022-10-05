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

class SubscriptionJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\SubscriptionJsonld' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\SubscriptionJsonld' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\SubscriptionJsonld();
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
        if (\array_key_exists('id', $data)) {
            $object->setId2($data['id']);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($data['organization']);
        }
        if (\array_key_exists('offer', $data) && null !== $data['offer']) {
            $object->setOffer($data['offer']);
        } elseif (\array_key_exists('offer', $data) && null === $data['offer']) {
            $object->setOffer(null);
        }
        if (\array_key_exists('options', $data)) {
            $values = [];
            foreach ($data['options'] as $value) {
                $values[] = $value;
            }
            $object->setOptions($values);
        }
        if (\array_key_exists('cost', $data)) {
            $object->setCost($this->denormalizer->denormalize($data['cost'], 'Gyroscops\\Api\\Model\\PriceJsonld', 'json', $context));
        }
        if (\array_key_exists('periods', $data)) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['periods'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setPeriods($values_1);
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
        if (null !== $object->getOffer()) {
            $data['offer'] = $object->getOffer();
        }
        if (null !== $object->getOptions()) {
            $values = [];
            foreach ($object->getOptions() as $value) {
                $values[] = $value;
            }
            $data['options'] = $values;
        }
        $data['cost'] = $this->normalizer->normalize($object->getCost(), 'json', $context);
        if (null !== $object->getPeriods()) {
            $values_1 = [];
            foreach ($object->getPeriods() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['periods'] = $values_1;
        }

        return $data;
    }
}
