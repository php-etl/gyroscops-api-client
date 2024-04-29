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

class AkeneoInstanceJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\AkeneoInstanceJsonld' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\AkeneoInstanceJsonld' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\AkeneoInstanceJsonld();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('@context', $data) && null !== $data['@context']) {
            $object->setContext($data['@context']);
            unset($data['@context']);
        } elseif (\array_key_exists('@context', $data) && null === $data['@context']) {
            $object->setContext(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId2($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId2(null);
        }
        if (\array_key_exists('url', $data) && null !== $data['url']) {
            $object->setUrl($data['url']);
            unset($data['url']);
        } elseif (\array_key_exists('url', $data) && null === $data['url']) {
            $object->setUrl(null);
        }
        if (\array_key_exists('organization', $data) && null !== $data['organization']) {
            $object->setOrganization($data['organization']);
            unset($data['organization']);
        } elseif (\array_key_exists('organization', $data) && null === $data['organization']) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('workspace', $data) && null !== $data['workspace']) {
            $object->setWorkspace($data['workspace']);
            unset($data['workspace']);
        } elseif (\array_key_exists('workspace', $data) && null === $data['workspace']) {
            $object->setWorkspace(null);
        }
        if (\array_key_exists('secret', $data) && null !== $data['secret']) {
            $object->setSecret($data['secret']);
            unset($data['secret']);
        } elseif (\array_key_exists('secret', $data) && null === $data['secret']) {
            $object->setSecret(null);
        }
        if (\array_key_exists('linkedAccounts', $data) && null !== $data['linkedAccounts']) {
            $values = [];
            foreach ($data['linkedAccounts'] as $value) {
                $values[] = $value;
            }
            $object->setLinkedAccounts($values);
            unset($data['linkedAccounts']);
        } elseif (\array_key_exists('linkedAccounts', $data) && null === $data['linkedAccounts']) {
            $object->setLinkedAccounts(null);
        }
        if (\array_key_exists('oauthTokens', $data) && null !== $data['oauthTokens']) {
            $values_1 = [];
            foreach ($data['oauthTokens'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setOauthTokens($values_1);
            unset($data['oauthTokens']);
        } elseif (\array_key_exists('oauthTokens', $data) && null === $data['oauthTokens']) {
            $object->setOauthTokens(null);
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
        if ($object->isInitialized('url') && null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if ($object->isInitialized('organization') && null !== $object->getOrganization()) {
            $data['organization'] = $object->getOrganization();
        }
        if ($object->isInitialized('workspace') && null !== $object->getWorkspace()) {
            $data['workspace'] = $object->getWorkspace();
        }
        if ($object->isInitialized('secret') && null !== $object->getSecret()) {
            $data['secret'] = $object->getSecret();
        }
        if ($object->isInitialized('linkedAccounts') && null !== $object->getLinkedAccounts()) {
            $values = [];
            foreach ($object->getLinkedAccounts() as $value) {
                $values[] = $value;
            }
            $data['linkedAccounts'] = $values;
        }
        if ($object->isInitialized('oauthTokens') && null !== $object->getOauthTokens()) {
            $values_1 = [];
            foreach ($object->getOauthTokens() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['oauthTokens'] = $values_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }
}
