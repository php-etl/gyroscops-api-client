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

class ComposerJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Gyroscops\\Api\\Model\\ComposerJsonld';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\ComposerJsonld';
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
        $object = new \Gyroscops\Api\Model\ComposerJsonld();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@context', $data) && $data['@context'] !== null) {
            $object->setContext($data['@context']);
            unset($data['@context']);
        } elseif (\array_key_exists('@context', $data) && $data['@context'] === null) {
            $object->setContext(null);
        }
        if (\array_key_exists('@id', $data) && $data['@id'] !== null) {
            $object->setId($data['@id']);
            unset($data['@id']);
        } elseif (\array_key_exists('@id', $data) && $data['@id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('@type', $data) && $data['@type'] !== null) {
            $object->setType($data['@type']);
            unset($data['@type']);
        } elseif (\array_key_exists('@type', $data) && $data['@type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('autoloads', $data) && $data['autoloads'] !== null) {
            $values = [];
            foreach ($data['autoloads'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Api\\Model\\ComposerAutoloadJsonld', 'json', $context);
            }
            $object->setAutoloads($values);
            unset($data['autoloads']);
        } elseif (\array_key_exists('autoloads', $data) && $data['autoloads'] === null) {
            $object->setAutoloads(null);
        }
        if (\array_key_exists('packages', $data) && $data['packages'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['packages'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setPackages($values_1);
            unset($data['packages']);
        } elseif (\array_key_exists('packages', $data) && $data['packages'] === null) {
            $object->setPackages(null);
        }
        if (\array_key_exists('repositories', $data) && $data['repositories'] !== null) {
            $values_2 = [];
            foreach ($data['repositories'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Gyroscops\\Api\\Model\\ComposerRepositoryJsonld', 'json', $context);
            }
            $object->setRepositories($values_2);
            unset($data['repositories']);
        } elseif (\array_key_exists('repositories', $data) && $data['repositories'] === null) {
            $object->setRepositories(null);
        }
        if (\array_key_exists('authentications', $data) && $data['authentications'] !== null) {
            $values_3 = [];
            foreach ($data['authentications'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Gyroscops\\Api\\Model\\ComposerAuthenticationJsonld', 'json', $context);
            }
            $object->setAuthentications($values_3);
            unset($data['authentications']);
        } elseif (\array_key_exists('authentications', $data) && $data['authentications'] === null) {
            $object->setAuthentications(null);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_4;
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
        if ($object->isInitialized('autoloads') && null !== $object->getAutoloads()) {
            $values = [];
            foreach ($object->getAutoloads() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['autoloads'] = $values;
        }
        if ($object->isInitialized('packages') && null !== $object->getPackages()) {
            $values_1 = [];
            foreach ($object->getPackages() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['packages'] = $values_1;
        }
        if ($object->isInitialized('repositories') && null !== $object->getRepositories()) {
            $values_2 = [];
            foreach ($object->getRepositories() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['repositories'] = $values_2;
        }
        if ($object->isInitialized('authentications') && null !== $object->getAuthentications()) {
            $values_3 = [];
            foreach ($object->getAuthentications() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['authentications'] = $values_3;
        }
        foreach ($object as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_4;
            }
        }

        return $data;
    }
}
