<?php

namespace Gyroscops\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Gyroscops\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Api\\Model\\OrganizationJsonld';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\OrganizationJsonld';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
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
            $values = array();
            foreach ($data['authorizations'] as $value) {
                $values[] = $value;
            }
            $object->setAuthorizations($values);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('users', $data)) {
            $values_1 = array();
            foreach ($data['users'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setUsers($values_1);
        }
        if (\array_key_exists('externalCollaborators', $data)) {
            $values_2 = array();
            foreach ($data['externalCollaborators'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setExternalCollaborators($values_2);
        }
        if (\array_key_exists('projects', $data)) {
            $values_3 = array();
            foreach ($data['projects'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setProjects($values_3);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAuthorizations()) {
            $values = array();
            foreach ($object->getAuthorizations() as $value) {
                $values[] = $value;
            }
            $data['authorizations'] = $values;
        }
        $data['name'] = $object->getName();
        if (null !== $object->getUsers()) {
            $values_1 = array();
            foreach ($object->getUsers() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['users'] = $values_1;
        }
        if (null !== $object->getExternalCollaborators()) {
            $values_2 = array();
            foreach ($object->getExternalCollaborators() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['externalCollaborators'] = $values_2;
        }
        if (null !== $object->getProjects()) {
            $values_3 = array();
            foreach ($object->getProjects() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['projects'] = $values_3;
        }
        return $data;
    }
}