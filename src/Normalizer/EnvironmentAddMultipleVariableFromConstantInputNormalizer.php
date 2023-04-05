<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Normalizer;

use Gyroscops\Api\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EnvironmentAddMultipleVariableFromConstantInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return \Gyroscops\Api\Model\EnvironmentAddMultipleVariableFromConstantInput::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && \Gyroscops\Api\Model\EnvironmentAddMultipleVariableFromConstantInput::class === $data::class;
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
        $object = new \Gyroscops\Api\Model\EnvironmentAddMultipleVariableFromConstantInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('variables', $data) && null !== $data['variables']) {
            $values = [];
            foreach ($data['variables'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gyroscops\Api\Model\VariableFromConstantInput::class, 'json', $context);
            }
            $object->setVariables($values);
        } elseif (\array_key_exists('variables', $data) && null === $data['variables']) {
            $object->setVariables(null);
        }
        if (\array_key_exists('iterator', $data) && null !== $data['iterator']) {
            $object->setIterator($data['iterator']);
        } elseif (\array_key_exists('iterator', $data) && null === $data['iterator']) {
            $object->setIterator(null);
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
        if (null !== $object->getVariables()) {
            $values = [];
            foreach ($object->getVariables() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['variables'] = $values;
        }
        if (null !== $object->getIterator()) {
            $data['iterator'] = $object->getIterator();
        }

        return $data;
    }
}
