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

class AuthenticationOffersGetResponse200HydraViewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === \Gyroscops\Api\Model\AuthenticationOffersGetResponse200HydraView::class;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data::class === \Gyroscops\Api\Model\AuthenticationOffersGetResponse200HydraView::class;
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
        $object = new \Gyroscops\Api\Model\AuthenticationOffersGetResponse200HydraView();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@id', $data) && $data['@id'] !== null) {
            $object->setId($data['@id']);
        } elseif (\array_key_exists('@id', $data) && $data['@id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('@type', $data) && $data['@type'] !== null) {
            $object->setType($data['@type']);
        } elseif (\array_key_exists('@type', $data) && $data['@type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('hydra:first', $data) && $data['hydra:first'] !== null) {
            $object->setHydraFirst($data['hydra:first']);
        } elseif (\array_key_exists('hydra:first', $data) && $data['hydra:first'] === null) {
            $object->setHydraFirst(null);
        }
        if (\array_key_exists('hydra:last', $data) && $data['hydra:last'] !== null) {
            $object->setHydraLast($data['hydra:last']);
        } elseif (\array_key_exists('hydra:last', $data) && $data['hydra:last'] === null) {
            $object->setHydraLast(null);
        }
        if (\array_key_exists('hydra:previous', $data) && $data['hydra:previous'] !== null) {
            $object->setHydraPrevious($data['hydra:previous']);
        } elseif (\array_key_exists('hydra:previous', $data) && $data['hydra:previous'] === null) {
            $object->setHydraPrevious(null);
        }
        if (\array_key_exists('hydra:next', $data) && $data['hydra:next'] !== null) {
            $object->setHydraNext($data['hydra:next']);
        } elseif (\array_key_exists('hydra:next', $data) && $data['hydra:next'] === null) {
            $object->setHydraNext(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['@id'] = $object->getId();
        }
        if (null !== $object->getType()) {
            $data['@type'] = $object->getType();
        }
        if (null !== $object->getHydraFirst()) {
            $data['hydra:first'] = $object->getHydraFirst();
        }
        if (null !== $object->getHydraLast()) {
            $data['hydra:last'] = $object->getHydraLast();
        }
        if (null !== $object->getHydraPrevious()) {
            $data['hydra:previous'] = $object->getHydraPrevious();
        }
        if (null !== $object->getHydraNext()) {
            $data['hydra:next'] = $object->getHydraNext();
        }

        return $data;
    }
}
