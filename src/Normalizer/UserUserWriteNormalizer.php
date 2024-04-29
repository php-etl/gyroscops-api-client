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

class UserUserWriteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\UserUserWrite' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\UserUserWrite' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\UserUserWrite();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('firstName', $data) && null !== $data['firstName']) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        } elseif (\array_key_exists('firstName', $data) && null === $data['firstName']) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('lastName', $data) && null !== $data['lastName']) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        } elseif (\array_key_exists('lastName', $data) && null === $data['lastName']) {
            $object->setLastName(null);
        }
        if (\array_key_exists('username', $data) && null !== $data['username']) {
            $object->setUsername($data['username']);
            unset($data['username']);
        } elseif (\array_key_exists('username', $data) && null === $data['username']) {
            $object->setUsername(null);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
            unset($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('password', $data) && null !== $data['password']) {
            $object->setPassword($data['password']);
            unset($data['password']);
        } elseif (\array_key_exists('password', $data) && null === $data['password']) {
            $object->setPassword(null);
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
            unset($data['roles']);
        } elseif (\array_key_exists('roles', $data) && null === $data['roles']) {
            $object->setRoles(null);
        }
        if (\array_key_exists('organization', $data) && null !== $data['organization']) {
            $object->setOrganization($data['organization']);
            unset($data['organization']);
        } elseif (\array_key_exists('organization', $data) && null === $data['organization']) {
            $object->setOrganization(null);
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
        $data['firstName'] = $object->getFirstName();
        $data['lastName'] = $object->getLastName();
        $data['username'] = $object->getUsername();
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('password') && null !== $object->getPassword()) {
            $data['password'] = $object->getPassword();
        }
        if ($object->isInitialized('roles') && null !== $object->getRoles()) {
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
        if ($object->isInitialized('organization') && null !== $object->getOrganization()) {
            $data['organization'] = $object->getOrganization();
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }
}
