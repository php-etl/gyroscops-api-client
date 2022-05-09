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

class UserJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'Gyroscops\\Api\\Model\\UserJsonld' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\UserJsonld' === $data::class;
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
            $values = [];
            foreach ($data['roles'] as $value) {
                $values[] = $value;
            }
            $object->setRoles($values);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($data['organization']);
        }
        if (\array_key_exists('authorizations', $data)) {
            $values_1 = [];
            foreach ($data['authorizations'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAuthorizations($values_1);
        }
        if (\array_key_exists('additionalOrganizations', $data)) {
            $values_2 = [];
            foreach ($data['additionalOrganizations'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setAdditionalOrganizations($values_2);
        }
        if (\array_key_exists('projects', $data)) {
            $values_3 = [];
            foreach ($data['projects'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setProjects($values_3);
        }
        if (\array_key_exists('referralCodes', $data)) {
            $values_4 = [];
            foreach ($data['referralCodes'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setReferralCodes($values_4);
        }
        if (\array_key_exists('acceptedReferralRequests', $data)) {
            $values_5 = [];
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
        if (\array_key_exists('project', $data)) {
            $values_6 = [];
            foreach ($data['project'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setProject($values_6);
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
                $values[] = $value;
            }
            $data['roles'] = $values;
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $object->getOrganization();
        }
        if (null !== $object->getAuthorizations()) {
            $values_1 = [];
            foreach ($object->getAuthorizations() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['authorizations'] = $values_1;
        }
        if (null !== $object->getProjects()) {
            $values_2 = [];
            foreach ($object->getProjects() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['projects'] = $values_2;
        }
        if (null !== $object->getProject()) {
            $values_3 = [];
            foreach ($object->getProject() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['project'] = $values_3;
        }

        return $data;
    }
}
