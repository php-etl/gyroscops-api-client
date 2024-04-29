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

class WorkspaceWorkspaceReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\WorkspaceWorkspaceRead' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\WorkspaceWorkspaceRead' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\WorkspaceWorkspaceRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('slug', $data) && null !== $data['slug']) {
            $object->setSlug($data['slug']);
            unset($data['slug']);
        } elseif (\array_key_exists('slug', $data) && null === $data['slug']) {
            $object->setSlug(null);
        }
        if (\array_key_exists('organization', $data) && null !== $data['organization']) {
            $object->setOrganization($data['organization']);
            unset($data['organization']);
        } elseif (\array_key_exists('organization', $data) && null === $data['organization']) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('authorizations', $data) && null !== $data['authorizations']) {
            $values = [];
            foreach ($data['authorizations'] as $value) {
                $values[] = $value;
            }
            $object->setAuthorizations($values);
            unset($data['authorizations']);
        } elseif (\array_key_exists('authorizations', $data) && null === $data['authorizations']) {
            $object->setAuthorizations(null);
        }
        if (\array_key_exists('users', $data) && null !== $data['users']) {
            $values_1 = [];
            foreach ($data['users'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setUsers($values_1);
            unset($data['users']);
        } elseif (\array_key_exists('users', $data) && null === $data['users']) {
            $object->setUsers(null);
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
        $data['name'] = $object->getName();
        if ($object->isInitialized('slug') && null !== $object->getSlug()) {
            $data['slug'] = $object->getSlug();
        }
        $data['organization'] = $object->getOrganization();
        if ($object->isInitialized('authorizations') && null !== $object->getAuthorizations()) {
            $values = [];
            foreach ($object->getAuthorizations() as $value) {
                $values[] = $value;
            }
            $data['authorizations'] = $values;
        }
        if ($object->isInitialized('users') && null !== $object->getUsers()) {
            $values_1 = [];
            foreach ($object->getUsers() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['users'] = $values_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }
}
