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

class AkeneoOauthTokenJsonldReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\AkeneoOauthTokenJsonldRead' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\AkeneoOauthTokenJsonldRead' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\AkeneoOauthTokenJsonldRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@id', $data) && null !== $data['@id']) {
            $object->setId($data['@id']);
        } elseif (\array_key_exists('@id', $data) && null === $data['@id']) {
            $object->setId(null);
        }
        if (\array_key_exists('@type', $data) && null !== $data['@type']) {
            $object->setType($data['@type']);
        } elseif (\array_key_exists('@type', $data) && null === $data['@type']) {
            $object->setType(null);
        }
        if (\array_key_exists('@context', $data) && null !== $data['@context']) {
            $object->setContext($data['@context']);
        } elseif (\array_key_exists('@context', $data) && null === $data['@context']) {
            $object->setContext(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId2($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId2(null);
        }
        if (\array_key_exists('url', $data) && null !== $data['url']) {
            $object->setUrl($data['url']);
        } elseif (\array_key_exists('url', $data) && null === $data['url']) {
            $object->setUrl(null);
        }
        if (\array_key_exists('scopes', $data) && null !== $data['scopes']) {
            $values = [];
            foreach ($data['scopes'] as $value) {
                $values[] = $value;
            }
            $object->setScopes($values);
        } elseif (\array_key_exists('scopes', $data) && null === $data['scopes']) {
            $object->setScopes(null);
        }
        if (\array_key_exists('responseType', $data) && null !== $data['responseType']) {
            $object->setResponseType($data['responseType']);
        } elseif (\array_key_exists('responseType', $data) && null === $data['responseType']) {
            $object->setResponseType(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['url'] = $object->getUrl();
        if (null !== $object->getScopes()) {
            $values = [];
            foreach ($object->getScopes() as $value) {
                $values[] = $value;
            }
            $data['scopes'] = $values;
        }
        $data['responseType'] = $object->getResponseType();

        return $data;
    }
}
