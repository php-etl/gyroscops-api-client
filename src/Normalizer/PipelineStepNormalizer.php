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

class PipelineStepNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'Gyroscops\\Api\\Model\\PipelineStep' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\PipelineStep' === $data::class;
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
        $object = new \Gyroscops\Api\Model\PipelineStep();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('order', $data)) {
            $object->setOrder($data['order']);
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
        }
        if (\array_key_exists('pipeline', $data)) {
            $object->setPipeline($this->denormalizer->denormalize($data['pipeline'], 'Gyroscops\\Api\\Model\\AbstractPipeline', 'json', $context));
        }
        if (\array_key_exists('probes', $data)) {
            $values = [];
            foreach ($data['probes'] as $value) {
                $values[] = $value;
            }
            $object->setProbes($values);
        }
        if (\array_key_exists('configuration', $data)) {
            $values_1 = [];
            foreach ($data['configuration'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setConfiguration($values_1);
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
        $data['code'] = $object->getCode();
        $data['order'] = $object->getOrder();
        $data['label'] = $object->getLabel();
        $data['pipeline'] = $this->normalizer->normalize($object->getPipeline(), 'json', $context);
        if (null !== $object->getProbes()) {
            $values = [];
            foreach ($object->getProbes() as $value) {
                $values[] = $value;
            }
            $data['probes'] = $values;
        }
        $values_1 = [];
        foreach ($object->getConfiguration() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['configuration'] = $values_1;

        return $data;
    }
}
