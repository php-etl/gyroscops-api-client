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

class RuntimeSchedulesIdExecutionsGetResponse200HydraSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'Gyroscops\\Api\\Model\\RuntimeSchedulesIdExecutionsGetResponse200HydraSearch' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\RuntimeSchedulesIdExecutionsGetResponse200HydraSearch' === $data::class;
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
        $object = new \Gyroscops\Api\Model\RuntimeSchedulesIdExecutionsGetResponse200HydraSearch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@type', $data)) {
            $object->setType($data['@type']);
        }
        if (\array_key_exists('hydra:template', $data)) {
            $object->setHydraTemplate($data['hydra:template']);
        }
        if (\array_key_exists('hydra:variableRepresentation', $data)) {
            $object->setHydraVariableRepresentation($data['hydra:variableRepresentation']);
        }
        if (\array_key_exists('hydra:mapping', $data)) {
            $values = [];
            foreach ($data['hydra:mapping'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Api\\Model\\RuntimeSchedulesIdExecutionsGetResponse200HydraSearchHydraMappingItem', 'json', $context);
            }
            $object->setHydraMapping($values);
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
        if (null !== $object->getType()) {
            $data['@type'] = $object->getType();
        }
        if (null !== $object->getHydraTemplate()) {
            $data['hydra:template'] = $object->getHydraTemplate();
        }
        if (null !== $object->getHydraVariableRepresentation()) {
            $data['hydra:variableRepresentation'] = $object->getHydraVariableRepresentation();
        }
        if (null !== $object->getHydraMapping()) {
            $values = [];
            foreach ($object->getHydraMapping() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['hydra:mapping'] = $values;
        }

        return $data;
    }
}
