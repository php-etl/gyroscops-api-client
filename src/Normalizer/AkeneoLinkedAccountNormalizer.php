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

class AkeneoLinkedAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\AkeneoLinkedAccount' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\AkeneoLinkedAccount' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\AkeneoLinkedAccount();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->setUser($data['user']);
        } elseif (\array_key_exists('user', $data) && null === $data['user']) {
            $object->setUser(null);
        }
        if (\array_key_exists('tokenId', $data)) {
            $object->setTokenId($data['tokenId']);
        }
        if (\array_key_exists('akeneoUserId', $data)) {
            $object->setAkeneoUserId($data['akeneoUserId']);
        }
        if (\array_key_exists('token', $data)) {
            $object->setToken($data['token']);
        }
        if (\array_key_exists('akeneoInstance', $data) && null !== $data['akeneoInstance']) {
            $object->setAkeneoInstance($data['akeneoInstance']);
        } elseif (\array_key_exists('akeneoInstance', $data) && null === $data['akeneoInstance']) {
            $object->setAkeneoInstance(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['user'] = $object->getUser();
        if (null !== $object->getTokenId()) {
            $data['tokenId'] = $object->getTokenId();
        }
        if (null !== $object->getAkeneoUserId()) {
            $data['akeneoUserId'] = $object->getAkeneoUserId();
        }
        $data['token'] = $object->getToken();
        if (null !== $object->getAkeneoInstance()) {
            $data['akeneoInstance'] = $object->getAkeneoInstance();
        }

        return $data;
    }
}
