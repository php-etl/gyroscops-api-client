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
class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Api\\Model\\User';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\User';
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
        $object = new \Gyroscops\Api\Model\User();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
        }
        if (\array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('password', $data) && $data['password'] !== null) {
            $object->setPassword($data['password']);
        }
        elseif (\array_key_exists('password', $data) && $data['password'] === null) {
            $object->setPassword(null);
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
        }
        if (\array_key_exists('roles', $data)) {
            $values = array();
            foreach ($data['roles'] as $value) {
                $values[] = $value;
            }
            $object->setRoles($values);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($data['organization']);
        }
        if (\array_key_exists('authorizations', $data)) {
            $values_1 = array();
            foreach ($data['authorizations'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAuthorizations($values_1);
        }
        if (\array_key_exists('projects', $data)) {
            $values_2 = array();
            foreach ($data['projects'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setProjects($values_2);
        }
        if (\array_key_exists('userIdentifier', $data)) {
            $object->setUserIdentifier($data['userIdentifier']);
        }
        if (\array_key_exists('salt', $data)) {
            $object->setSalt($data['salt']);
        }
        if (\array_key_exists('project', $data)) {
            $values_3 = array();
            foreach ($data['project'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setProject($values_3);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['firstName'] = $object->getFirstName();
        $data['lastName'] = $object->getLastName();
        $data['username'] = $object->getUsername();
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getPassword()) {
            $data['password'] = $object->getPassword();
        }
        if (null !== $object->getEnabled()) {
            $data['enabled'] = $object->getEnabled();
        }
        if (null !== $object->getRoles()) {
            $values = array();
            foreach ($object->getRoles() as $value) {
                $values[] = $value;
            }
            $data['roles'] = $values;
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $object->getOrganization();
        }
        if (null !== $object->getAuthorizations()) {
            $values_1 = array();
            foreach ($object->getAuthorizations() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['authorizations'] = $values_1;
        }
        if (null !== $object->getProjects()) {
            $values_2 = array();
            foreach ($object->getProjects() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['projects'] = $values_2;
        }
        if (null !== $object->getProject()) {
            $values_3 = array();
            foreach ($object->getProject() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['project'] = $values_3;
        }
        return $data;
    }
}