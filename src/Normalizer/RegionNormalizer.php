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

class RegionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Gyroscops\\Api\\Model\\Region';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\Region';
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
        $object = new \Gyroscops\Api\Model\Region();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('provider', $data) && $data['provider'] !== null) {
            $object->setProvider($data['provider']);
            unset($data['provider']);
        } elseif (\array_key_exists('provider', $data) && $data['provider'] === null) {
            $object->setProvider(null);
        }
        if (\array_key_exists('datacenterName', $data) && $data['datacenterName'] !== null) {
            $object->setDatacenterName($data['datacenterName']);
            unset($data['datacenterName']);
        } elseif (\array_key_exists('datacenterName', $data) && $data['datacenterName'] === null) {
            $object->setDatacenterName(null);
        }
        if (\array_key_exists('datacenterAddress', $data) && $data['datacenterAddress'] !== null) {
            $object->setDatacenterAddress($data['datacenterAddress']);
            unset($data['datacenterAddress']);
        } elseif (\array_key_exists('datacenterAddress', $data) && $data['datacenterAddress'] === null) {
            $object->setDatacenterAddress(null);
        }
        if (\array_key_exists('cloudEngine', $data) && $data['cloudEngine'] !== null) {
            $object->setCloudEngine($this->denormalizer->denormalize($data['cloudEngine'], 'Gyroscops\\Api\\Model\\AbstractCloudEngine', 'json', $context));
            unset($data['cloudEngine']);
        } elseif (\array_key_exists('cloudEngine', $data) && $data['cloudEngine'] === null) {
            $object->setCloudEngine(null);
        }
        if (\array_key_exists('workspaces', $data) && $data['workspaces'] !== null) {
            $values = [];
            foreach ($data['workspaces'] as $value) {
                $values[] = $value;
            }
            $object->setWorkspaces($values);
            unset($data['workspaces']);
        } elseif (\array_key_exists('workspaces', $data) && $data['workspaces'] === null) {
            $object->setWorkspaces(null);
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
        $data['provider'] = $object->getProvider();
        $data['datacenterName'] = $object->getDatacenterName();
        $data['datacenterAddress'] = $object->getDatacenterAddress();
        if ($object->isInitialized('cloudEngine') && null !== $object->getCloudEngine()) {
            $data['cloudEngine'] = $this->normalizer->normalize($object->getCloudEngine(), 'json', $context);
        }
        if ($object->isInitialized('workspaces') && null !== $object->getWorkspaces()) {
            $values = [];
            foreach ($object->getWorkspaces() as $value) {
                $values[] = $value;
            }
            $data['workspaces'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }
}
