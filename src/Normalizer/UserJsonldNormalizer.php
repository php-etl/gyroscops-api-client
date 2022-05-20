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
class UserJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Api\\Model\\UserJsonld';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\UserJsonld';
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
        $object = new \Gyroscops\Api\Model\UserJsonld();
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
        if (\array_key_exists('password', $data)) {
            $object->setPassword($data['password']);
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
        if (\array_key_exists('authorizations', $data)) {
            $values_1 = array();
            foreach ($data['authorizations'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAuthorizations($values_1);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($data['organization']);
        }
        if (\array_key_exists('additionalOrganizations', $data)) {
            $values_2 = array();
            foreach ($data['additionalOrganizations'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setAdditionalOrganizations($values_2);
        }
        if (\array_key_exists('workspaces', $data)) {
            $values_3 = array();
            foreach ($data['workspaces'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setWorkspaces($values_3);
        }
        if (\array_key_exists('referralCodes', $data)) {
            $values_4 = array();
            foreach ($data['referralCodes'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setReferralCodes($values_4);
        }
        if (\array_key_exists('acceptedReferralRequests', $data)) {
            $values_5 = array();
            foreach ($data['acceptedReferralRequests'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setAcceptedReferralRequests($values_5);
        }
        if (\array_key_exists('userIdentifier', $data)) {
            $object->setUserIdentifier($data['userIdentifier']);
        }
        if (\array_key_exists('salt', $data)) {
            $object->setSalt($data['salt']);
        }
        if (\array_key_exists('workspace', $data)) {
            $values_6 = array();
            foreach ($data['workspace'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setWorkspace($values_6);
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
        if (null !== $object->getAuthorizations()) {
            $values_1 = array();
            foreach ($object->getAuthorizations() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['authorizations'] = $values_1;
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $object->getOrganization();
        }
        if (null !== $object->getAdditionalOrganizations()) {
            $values_2 = array();
            foreach ($object->getAdditionalOrganizations() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['additionalOrganizations'] = $values_2;
        }
        if (null !== $object->getWorkspaces()) {
            $values_3 = array();
            foreach ($object->getWorkspaces() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['workspaces'] = $values_3;
        }
        if (null !== $object->getWorkspace()) {
            $values_4 = array();
            foreach ($object->getWorkspace() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['workspace'] = $values_4;
        }
        return $data;
    }
}