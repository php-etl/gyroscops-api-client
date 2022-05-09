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

class OrganizationJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @param mixed      $data
     * @param mixed      $type
     * @param mixed|null $format
     *
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\OrganizationJsonld' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\OrganizationJsonld' === $data::class;
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
        $object = new \Gyroscops\Api\Model\OrganizationJsonld();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@context', $data)) {
            $object->setContext($data['@context']);
        }
        if (\array_key_exists('@id', $data)) {
            $object->setId($data['@id']);
        }
        if (\array_key_exists('@type', $data)) {
            $object->setType($data['@type']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId2($data['id']);
        }
        if (\array_key_exists('authorizations', $data)) {
            $values = [];
            foreach ($data['authorizations'] as $value) {
                $values[] = $value;
            }
            $object->setAuthorizations($values);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('users', $data)) {
            $values_1 = [];
            foreach ($data['users'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setUsers($values_1);
        }
        if (\array_key_exists('externalCollaborators', $data)) {
            $values_2 = [];
            foreach ($data['externalCollaborators'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setExternalCollaborators($values_2);
        }
        if (\array_key_exists('projects', $data)) {
            $values_3 = [];
            foreach ($data['projects'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setProjects($values_3);
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
        if (null !== $object->getAuthorizations()) {
            $values = [];
            foreach ($object->getAuthorizations() as $value) {
                $values[] = $value;
            }
            $data['authorizations'] = $values;
        }
        $data['name'] = $object->getName();
        if (null !== $object->getUsers()) {
            $values_1 = [];
            foreach ($object->getUsers() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['users'] = $values_1;
        }
        if (null !== $object->getExternalCollaborators()) {
            $values_2 = [];
            foreach ($object->getExternalCollaborators() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['externalCollaborators'] = $values_2;
        }
        if (null !== $object->getProjects()) {
            $values_3 = [];
            foreach ($object->getProjects() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['projects'] = $values_3;
        }

        return $data;
    }
}
