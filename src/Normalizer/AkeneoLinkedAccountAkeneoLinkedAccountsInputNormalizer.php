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

class AkeneoLinkedAccountAkeneoLinkedAccountsInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Gyroscops\\Api\\Model\\AkeneoLinkedAccountAkeneoLinkedAccountsInput';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\AkeneoLinkedAccountAkeneoLinkedAccountsInput';
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
        $object = new \Gyroscops\Api\Model\AkeneoLinkedAccountAkeneoLinkedAccountsInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('akeneoInstance', $data) && $data['akeneoInstance'] !== null) {
            $object->setAkeneoInstance($data['akeneoInstance']);
            unset($data['akeneoInstance']);
        } elseif (\array_key_exists('akeneoInstance', $data) && $data['akeneoInstance'] === null) {
            $object->setAkeneoInstance(null);
        }
        if (\array_key_exists('tokenId', $data) && $data['tokenId'] !== null) {
            $object->setTokenId($data['tokenId']);
            unset($data['tokenId']);
        } elseif (\array_key_exists('tokenId', $data) && $data['tokenId'] === null) {
            $object->setTokenId(null);
        }
        if (\array_key_exists('akeneoUserId', $data) && $data['akeneoUserId'] !== null) {
            $object->setAkeneoUserId($data['akeneoUserId']);
            unset($data['akeneoUserId']);
        } elseif (\array_key_exists('akeneoUserId', $data) && $data['akeneoUserId'] === null) {
            $object->setAkeneoUserId(null);
        }
        if (\array_key_exists('token', $data) && $data['token'] !== null) {
            $object->setToken($data['token']);
            unset($data['token']);
        } elseif (\array_key_exists('token', $data) && $data['token'] === null) {
            $object->setToken(null);
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
        if ($object->isInitialized('akeneoInstance') && null !== $object->getAkeneoInstance()) {
            $data['akeneoInstance'] = $object->getAkeneoInstance();
        }
        if ($object->isInitialized('tokenId') && null !== $object->getTokenId()) {
            $data['tokenId'] = $object->getTokenId();
        }
        if ($object->isInitialized('akeneoUserId') && null !== $object->getAkeneoUserId()) {
            $data['akeneoUserId'] = $object->getAkeneoUserId();
        }
        if ($object->isInitialized('token') && null !== $object->getToken()) {
            $data['token'] = $object->getToken();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
