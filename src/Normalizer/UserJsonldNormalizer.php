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
        return 'Gyroscops\\Api\\Model\\UserJsonld' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\UserJsonld' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\UserJsonld();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@context', $data) && null !== $data['@context']) {
            $object->setContext($data['@context']);
        } elseif (\array_key_exists('@context', $data) && null === $data['@context']) {
            $object->setContext(null);
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
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId2($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId2(null);
        }
        if (\array_key_exists('firstName', $data) && null !== $data['firstName']) {
            $object->setFirstName($data['firstName']);
        } elseif (\array_key_exists('firstName', $data) && null === $data['firstName']) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('lastName', $data) && null !== $data['lastName']) {
            $object->setLastName($data['lastName']);
        } elseif (\array_key_exists('lastName', $data) && null === $data['lastName']) {
            $object->setLastName(null);
        }
        if (\array_key_exists('username', $data) && null !== $data['username']) {
            $object->setUsername($data['username']);
        } elseif (\array_key_exists('username', $data) && null === $data['username']) {
            $object->setUsername(null);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('password', $data) && null !== $data['password']) {
            $object->setPassword($data['password']);
        } elseif (\array_key_exists('password', $data) && null === $data['password']) {
            $object->setPassword(null);
        }
        if (\array_key_exists('enabled', $data) && null !== $data['enabled']) {
            $object->setEnabled($data['enabled']);
        } elseif (\array_key_exists('enabled', $data) && null === $data['enabled']) {
            $object->setEnabled(null);
        }
        if (\array_key_exists('roles', $data) && null !== $data['roles']) {
            $values = [];
            foreach ($data['roles'] as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setRoles($values);
        } elseif (\array_key_exists('roles', $data) && null === $data['roles']) {
            $object->setRoles(null);
        }
        if (\array_key_exists('authorizations', $data) && null !== $data['authorizations']) {
            $values_2 = [];
            foreach ($data['authorizations'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setAuthorizations($values_2);
        } elseif (\array_key_exists('authorizations', $data) && null === $data['authorizations']) {
            $object->setAuthorizations(null);
        }
        if (\array_key_exists('organization', $data) && null !== $data['organization']) {
            $object->setOrganization($data['organization']);
        } elseif (\array_key_exists('organization', $data) && null === $data['organization']) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('additionalOrganizations', $data) && null !== $data['additionalOrganizations']) {
            $values_3 = [];
            foreach ($data['additionalOrganizations'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setAdditionalOrganizations($values_3);
        } elseif (\array_key_exists('additionalOrganizations', $data) && null === $data['additionalOrganizations']) {
            $object->setAdditionalOrganizations(null);
        }
        if (\array_key_exists('workspaces', $data) && null !== $data['workspaces']) {
            $values_4 = [];
            foreach ($data['workspaces'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setWorkspaces($values_4);
        } elseif (\array_key_exists('workspaces', $data) && null === $data['workspaces']) {
            $object->setWorkspaces(null);
        }
        if (\array_key_exists('currentWorkspace', $data) && null !== $data['currentWorkspace']) {
            $object->setCurrentWorkspace($data['currentWorkspace']);
        } elseif (\array_key_exists('currentWorkspace', $data) && null === $data['currentWorkspace']) {
            $object->setCurrentWorkspace(null);
        }
        if (\array_key_exists('referralCodes', $data) && null !== $data['referralCodes']) {
            $values_5 = [];
            foreach ($data['referralCodes'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setReferralCodes($values_5);
        } elseif (\array_key_exists('referralCodes', $data) && null === $data['referralCodes']) {
            $object->setReferralCodes(null);
        }
        if (\array_key_exists('acceptedReferralRequests', $data) && null !== $data['acceptedReferralRequests']) {
            $values_6 = [];
            foreach ($data['acceptedReferralRequests'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setAcceptedReferralRequests($values_6);
        } elseif (\array_key_exists('acceptedReferralRequests', $data) && null === $data['acceptedReferralRequests']) {
            $object->setAcceptedReferralRequests(null);
        }
        if (\array_key_exists('userIdentifier', $data) && null !== $data['userIdentifier']) {
            $object->setUserIdentifier($data['userIdentifier']);
        } elseif (\array_key_exists('userIdentifier', $data) && null === $data['userIdentifier']) {
            $object->setUserIdentifier(null);
        }
        if (\array_key_exists('salt', $data) && null !== $data['salt']) {
            $object->setSalt($data['salt']);
        } elseif (\array_key_exists('salt', $data) && null === $data['salt']) {
            $object->setSalt(null);
        }
        if (\array_key_exists('workspace', $data) && null !== $data['workspace']) {
            $values_7 = [];
            foreach ($data['workspace'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setWorkspace($values_7);
        } elseif (\array_key_exists('workspace', $data) && null === $data['workspace']) {
            $object->setWorkspace(null);
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
