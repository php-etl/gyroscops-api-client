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

class UserUserChangePasswordInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\UserUserChangePasswordInput' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\UserUserChangePasswordInput' === get_class($data);
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
        if (\array_key_exists('currentPassword', $data)) {
            $object->setCurrentPassword($data['currentPassword']);
        }
        if (\array_key_exists('newPassword', $data)) {
            $object->setNewPassword($data['newPassword']);
        }
        if (\array_key_exists('confirmPassword', $data)) {
            $object->setConfirmPassword($data['confirmPassword']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCurrentPassword()) {
            $data['currentPassword'] = $object->getCurrentPassword();
        }
        if (null !== $object->getNewPassword()) {
            $data['newPassword'] = $object->getNewPassword();
        }
        if (null !== $object->getConfirmPassword()) {
            $data['confirmPassword'] = $object->getConfirmPassword();
        }

        return $data;
    }
}
