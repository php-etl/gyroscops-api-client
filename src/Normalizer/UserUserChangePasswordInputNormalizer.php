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

class UserUserChangePasswordInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Gyroscops\\Api\\Model\\UserUserChangePasswordInput';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\UserUserChangePasswordInput';
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
        $object = new \Gyroscops\Api\Model\UserUserChangePasswordInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('currentPassword', $data) && $data['currentPassword'] !== null) {
            $object->setCurrentPassword($data['currentPassword']);
            unset($data['currentPassword']);
        } elseif (\array_key_exists('currentPassword', $data) && $data['currentPassword'] === null) {
            $object->setCurrentPassword(null);
        }
        if (\array_key_exists('newPassword', $data) && $data['newPassword'] !== null) {
            $object->setNewPassword($data['newPassword']);
            unset($data['newPassword']);
        } elseif (\array_key_exists('newPassword', $data) && $data['newPassword'] === null) {
            $object->setNewPassword(null);
        }
        if (\array_key_exists('confirmPassword', $data) && $data['confirmPassword'] !== null) {
            $object->setConfirmPassword($data['confirmPassword']);
            unset($data['confirmPassword']);
        } elseif (\array_key_exists('confirmPassword', $data) && $data['confirmPassword'] === null) {
            $object->setConfirmPassword(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if ($object->isInitialized('currentPassword') && null !== $object->getCurrentPassword()) {
            $data['currentPassword'] = $object->getCurrentPassword();
        }
        if ($object->isInitialized('newPassword') && null !== $object->getNewPassword()) {
            $data['newPassword'] = $object->getNewPassword();
        }
        if ($object->isInitialized('confirmPassword') && null !== $object->getConfirmPassword()) {
            $data['confirmPassword'] = $object->getConfirmPassword();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
