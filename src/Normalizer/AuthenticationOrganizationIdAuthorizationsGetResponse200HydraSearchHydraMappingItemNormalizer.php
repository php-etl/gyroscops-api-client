<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Normalizer;

use Gyroscops\Api\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AuthenticationOrganizationIdAuthorizationsGetResponse200HydraSearchHydraMappingItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === \Gyroscops\Api\Model\AuthenticationOrganizationIdAuthorizationsGetResponse200HydraSearchHydraMappingItem::class;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data::class === \Gyroscops\Api\Model\AuthenticationOrganizationIdAuthorizationsGetResponse200HydraSearchHydraMappingItem::class;
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
        $object = new \Gyroscops\Api\Model\AuthenticationOrganizationIdAuthorizationsGetResponse200HydraSearchHydraMappingItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@type', $data) && $data['@type'] !== null) {
            $object->setType($data['@type']);
        } elseif (\array_key_exists('@type', $data) && $data['@type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('variable', $data) && $data['variable'] !== null) {
            $object->setVariable($data['variable']);
        } elseif (\array_key_exists('variable', $data) && $data['variable'] === null) {
            $object->setVariable(null);
        }
        if (\array_key_exists('property', $data) && $data['property'] !== null) {
            $object->setProperty($data['property']);
        } elseif (\array_key_exists('property', $data) && $data['property'] === null) {
            $object->setProperty(null);
        }
        if (\array_key_exists('required', $data) && $data['required'] !== null) {
            $object->setRequired($data['required']);
        } elseif (\array_key_exists('required', $data) && $data['required'] === null) {
            $object->setRequired(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getType()) {
            $data['@type'] = $object->getType();
        }
        if (null !== $object->getVariable()) {
            $data['variable'] = $object->getVariable();
        }
        if (null !== $object->getProperty()) {
            $data['property'] = $object->getProperty();
        }
        if (null !== $object->getRequired()) {
            $data['required'] = $object->getRequired();
        }

        return $data;
    }
}
