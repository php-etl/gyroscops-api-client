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
        return 'Gyroscops\\Api\\Model\\User' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\User' === get_class($data);
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
        if (\array_key_exists('password', $data)) {
            $object->setPassword($data['password']);
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
        }
        if (\array_key_exists('roles', $data)) {
            $values = [];
            foreach ($data['roles'] as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setRoles($values);
        }
        if (\array_key_exists('authorizations', $data)) {
            $values_2 = [];
            foreach ($data['authorizations'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setAuthorizations($values_2);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($data['organization']);
        }
        if (\array_key_exists('additionalOrganizations', $data)) {
            $values_3 = [];
            foreach ($data['additionalOrganizations'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setAdditionalOrganizations($values_3);
        }
        if (\array_key_exists('workspaces', $data)) {
            $values_4 = [];
            foreach ($data['workspaces'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setWorkspaces($values_4);
        }
        if (\array_key_exists('currentWorkspace', $data) && null !== $data['currentWorkspace']) {
            $object->setCurrentWorkspace($data['currentWorkspace']);
        } elseif (\array_key_exists('currentWorkspace', $data) && null === $data['currentWorkspace']) {
            $object->setCurrentWorkspace(null);
        }
        if (\array_key_exists('referralCodes', $data)) {
            $values_5 = [];
            foreach ($data['referralCodes'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setReferralCodes($values_5);
        }
        if (\array_key_exists('acceptedReferralRequests', $data)) {
            $values_6 = [];
            foreach ($data['acceptedReferralRequests'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setAcceptedReferralRequests($values_6);
        }
        if (\array_key_exists('userIdentifier', $data)) {
            $object->setUserIdentifier($data['userIdentifier']);
        }
        if (\array_key_exists('salt', $data)) {
            $object->setSalt($data['salt']);
        }
        if (\array_key_exists('workspace', $data)) {
            $values_7 = [];
            foreach ($data['workspace'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setWorkspace($values_7);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
            $values = [];
            foreach ($object->getRoles() as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $data['roles'] = $values;
        }
        if (null !== $object->getAuthorizations()) {
            $values_2 = [];
            foreach ($object->getAuthorizations() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['authorizations'] = $values_2;
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $object->getOrganization();
        }
        if (null !== $object->getAdditionalOrganizations()) {
            $values_3 = [];
            foreach ($object->getAdditionalOrganizations() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['additionalOrganizations'] = $values_3;
        }
        if (null !== $object->getWorkspaces()) {
            $values_4 = [];
            foreach ($object->getWorkspaces() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['workspaces'] = $values_4;
        }
        if (null !== $object->getCurrentWorkspace()) {
            $data['currentWorkspace'] = $object->getCurrentWorkspace();
        }
        if (null !== $object->getWorkspace()) {
            $values_5 = [];
            foreach ($object->getWorkspace() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['workspace'] = $values_5;
        }

        return $data;
    }
}
