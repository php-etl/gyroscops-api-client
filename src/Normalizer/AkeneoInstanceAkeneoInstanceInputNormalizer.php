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

class AkeneoInstanceAkeneoInstanceInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\AkeneoInstanceAkeneoInstanceInput' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\AkeneoInstanceAkeneoInstanceInput' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\AkeneoInstanceAkeneoInstanceInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pimUrl', $data) && null !== $data['pimUrl']) {
            $object->setPimUrl($data['pimUrl']);
        } elseif (\array_key_exists('pimUrl', $data) && null === $data['pimUrl']) {
            $object->setPimUrl(null);
        }
        if (\array_key_exists('organization', $data) && null !== $data['organization']) {
            $object->setOrganization($data['organization']);
        } elseif (\array_key_exists('organization', $data) && null === $data['organization']) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('secret', $data) && null !== $data['secret']) {
            $object->setSecret($this->denormalizer->denormalize($data['secret'], 'Gyroscops\\Api\\Model\\SecretInput', 'json', $context));
        } elseif (\array_key_exists('secret', $data) && null === $data['secret']) {
            $object->setSecret(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getPimUrl()) {
            $data['pimUrl'] = $object->getPimUrl();
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $object->getOrganization();
        }
        if (null !== $object->getSecret()) {
            $data['secret'] = $this->normalizer->normalize($object->getSecret(), 'json', $context);
        }

        return $data;
    }
}
