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

class GatewayAkeneoInstanceOauthStateGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Gyroscops\\Api\\Model\\GatewayAkeneoInstanceOauthStateGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\GatewayAkeneoInstanceOauthStateGetResponse200' === $data::class;
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
        $object = new \Gyroscops\Api\Model\GatewayAkeneoInstanceOauthStateGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('hydra:member', $data) && null !== $data['hydra:member']) {
            $values = [];
            foreach ($data['hydra:member'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Api\\Model\\AkeneoInstanceJsonld', 'json', $context);
            }
            $object->setHydraMember($values);
        } elseif (\array_key_exists('hydra:member', $data) && null === $data['hydra:member']) {
            $object->setHydraMember(null);
        }
        if (\array_key_exists('hydra:totalItems', $data) && null !== $data['hydra:totalItems']) {
            $object->setHydraTotalItems($data['hydra:totalItems']);
        } elseif (\array_key_exists('hydra:totalItems', $data) && null === $data['hydra:totalItems']) {
            $object->setHydraTotalItems(null);
        }
        if (\array_key_exists('hydra:view', $data) && null !== $data['hydra:view']) {
            $object->setHydraView($this->denormalizer->denormalize($data['hydra:view'], 'Gyroscops\\Api\\Model\\GatewayAkeneoInstanceOauthStateGetResponse200HydraView', 'json', $context));
        } elseif (\array_key_exists('hydra:view', $data) && null === $data['hydra:view']) {
            $object->setHydraView(null);
        }
        if (\array_key_exists('hydra:search', $data) && null !== $data['hydra:search']) {
            $object->setHydraSearch($this->denormalizer->denormalize($data['hydra:search'], 'Gyroscops\\Api\\Model\\GatewayAkeneoInstanceOauthStateGetResponse200HydraSearch', 'json', $context));
        } elseif (\array_key_exists('hydra:search', $data) && null === $data['hydra:search']) {
            $object->setHydraSearch(null);
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
        $values = [];
        foreach ($object->getHydraMember() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['hydra:member'] = $values;
        if (null !== $object->getHydraTotalItems()) {
            $data['hydra:totalItems'] = $object->getHydraTotalItems();
        }
        if (null !== $object->getHydraView()) {
            $data['hydra:view'] = $this->normalizer->normalize($object->getHydraView(), 'json', $context);
        }
        if (null !== $object->getHydraSearch()) {
            $data['hydra:search'] = $this->normalizer->normalize($object->getHydraSearch(), 'json', $context);
        }

        return $data;
    }
}
