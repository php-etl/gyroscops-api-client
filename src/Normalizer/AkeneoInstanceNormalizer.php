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

class AkeneoInstanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Gyroscops\\Api\\Model\\AkeneoInstance' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\AkeneoInstance' === $data::class;
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
        $object = new \Gyroscops\Api\Model\AkeneoInstance();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('url', $data) && null !== $data['url']) {
            $object->setUrl($data['url']);
        } elseif (\array_key_exists('url', $data) && null === $data['url']) {
            $object->setUrl(null);
        }
        if (\array_key_exists('organization', $data) && null !== $data['organization']) {
            $object->setOrganization($data['organization']);
        } elseif (\array_key_exists('organization', $data) && null === $data['organization']) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('workspace', $data) && null !== $data['workspace']) {
            $object->setWorkspace($data['workspace']);
        } elseif (\array_key_exists('workspace', $data) && null === $data['workspace']) {
            $object->setWorkspace(null);
        }
        if (\array_key_exists('secret', $data) && null !== $data['secret']) {
            $object->setSecret($data['secret']);
        } elseif (\array_key_exists('secret', $data) && null === $data['secret']) {
            $object->setSecret(null);
        }
        if (\array_key_exists('linkedAccounts', $data) && null !== $data['linkedAccounts']) {
            $values = [];
            foreach ($data['linkedAccounts'] as $value) {
                $values[] = $value;
            }
            $object->setLinkedAccounts($values);
        } elseif (\array_key_exists('linkedAccounts', $data) && null === $data['linkedAccounts']) {
            $object->setLinkedAccounts(null);
        }
        if (\array_key_exists('oauthTokens', $data) && null !== $data['oauthTokens']) {
            $values_1 = [];
            foreach ($data['oauthTokens'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setOauthTokens($values_1);
        } elseif (\array_key_exists('oauthTokens', $data) && null === $data['oauthTokens']) {
            $object->setOauthTokens(null);
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
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $object->getOrganization();
        }
        if (null !== $object->getWorkspace()) {
            $data['workspace'] = $object->getWorkspace();
        }
        if (null !== $object->getSecret()) {
            $data['secret'] = $object->getSecret();
        }
        if (null !== $object->getLinkedAccounts()) {
            $values = [];
            foreach ($object->getLinkedAccounts() as $value) {
                $values[] = $value;
            }
            $data['linkedAccounts'] = $values;
        }
        if (null !== $object->getOauthTokens()) {
            $values_1 = [];
            foreach ($object->getOauthTokens() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['oauthTokens'] = $values_1;
        }

        return $data;
    }
}
