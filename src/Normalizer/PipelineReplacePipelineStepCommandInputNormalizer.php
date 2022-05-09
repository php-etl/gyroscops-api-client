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

class PipelineReplacePipelineStepCommandInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'Gyroscops\\Api\\Model\\PipelineReplacePipelineStepCommandInput' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\PipelineReplacePipelineStepCommandInput' === $data::class;
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
        $object = new \Gyroscops\Api\Model\PipelineReplacePipelineStepCommandInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pipeline', $data)) {
            $object->setPipeline($data['pipeline']);
        }
        if (\array_key_exists('former', $data)) {
            $object->setFormer($data['former']);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
        }
        if (\array_key_exists('configuration', $data)) {
            $values = [];
            foreach ($data['configuration'] as $value) {
                $values[] = $value;
            }
            $object->setConfiguration($values);
        }
        if (\array_key_exists('probes', $data)) {
            $values_1 = [];
            foreach ($data['probes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Gyroscops\\Api\\Model\\Probe', 'json', $context);
            }
            $object->setProbes($values_1);
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
        if (null !== $object->getPipeline()) {
            $data['pipeline'] = $object->getPipeline();
        }
        if (null !== $object->getFormer()) {
            $data['former'] = $object->getFormer();
        }
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getLabel()) {
            $data['label'] = $object->getLabel();
        }
        if (null !== $object->getConfiguration()) {
            $values = [];
            foreach ($object->getConfiguration() as $value) {
                $values[] = $value;
            }
            $data['configuration'] = $values;
        }
        if (null !== $object->getProbes()) {
            $values_1 = [];
            foreach ($object->getProbes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['probes'] = $values_1;
        }

        return $data;
    }
}
