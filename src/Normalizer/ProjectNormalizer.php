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

class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'Gyroscops\\Api\\Model\\Project' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\Project' === $data::class;
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
        $object = new \Gyroscops\Api\Model\Project();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('organization', $data) && null !== $data['organization']) {
            $object->setOrganization($data['organization']);
        } elseif (\array_key_exists('organization', $data) && null === $data['organization']) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('authorizations', $data)) {
            $values = [];
            foreach ($data['authorizations'] as $value) {
                $values[] = $value;
            }
            $object->setAuthorizations($values);
        }
        if (\array_key_exists('users', $data)) {
            $values_1 = [];
            foreach ($data['users'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setUsers($values_1);
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
        $data['name'] = $object->getName();
        $data['organization'] = $object->getOrganization();
        if (null !== $object->getAuthorizations()) {
            $values = [];
            foreach ($object->getAuthorizations() as $value) {
                $values[] = $value;
            }
            $data['authorizations'] = $values;
        }
        if (null !== $object->getUsers()) {
            $values_1 = [];
            foreach ($object->getUsers() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['users'] = $values_1;
        }

        return $data;
    }
}
