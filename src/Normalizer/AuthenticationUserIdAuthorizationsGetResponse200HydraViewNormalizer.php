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

class AuthenticationUserIdAuthorizationsGetResponse200HydraViewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Gyroscops\\Api\\Model\\AuthenticationUserIdAuthorizationsGetResponse200HydraView' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\AuthenticationUserIdAuthorizationsGetResponse200HydraView' === $data::class;
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
        $object = new \Gyroscops\Api\Model\AuthenticationUserIdAuthorizationsGetResponse200HydraView();
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
        if (\array_key_exists('hydra:first', $data) && null !== $data['hydra:first']) {
            $object->setHydraFirst($data['hydra:first']);
        } elseif (\array_key_exists('hydra:first', $data) && null === $data['hydra:first']) {
            $object->setHydraFirst(null);
        }
        if (\array_key_exists('hydra:last', $data) && null !== $data['hydra:last']) {
            $object->setHydraLast($data['hydra:last']);
        } elseif (\array_key_exists('hydra:last', $data) && null === $data['hydra:last']) {
            $object->setHydraLast(null);
        }
        if (\array_key_exists('hydra:previous', $data) && null !== $data['hydra:previous']) {
            $object->setHydraPrevious($data['hydra:previous']);
        } elseif (\array_key_exists('hydra:previous', $data) && null === $data['hydra:previous']) {
            $object->setHydraPrevious(null);
        }
        if (\array_key_exists('hydra:next', $data) && null !== $data['hydra:next']) {
            $object->setHydraNext($data['hydra:next']);
        } elseif (\array_key_exists('hydra:next', $data) && null === $data['hydra:next']) {
            $object->setHydraNext(null);
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
