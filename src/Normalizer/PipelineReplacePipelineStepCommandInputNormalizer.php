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

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Gyroscops\\Api\\Model\\PipelineReplacePipelineStepCommandInput' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
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
        if (\array_key_exists('pipeline', $data) && null !== $data['pipeline']) {
            $object->setPipeline($data['pipeline']);
        } elseif (\array_key_exists('pipeline', $data) && null === $data['pipeline']) {
            $object->setPipeline(null);
        }
        if (\array_key_exists('former', $data) && null !== $data['former']) {
            $object->setFormer($data['former']);
        } elseif (\array_key_exists('former', $data) && null === $data['former']) {
            $object->setFormer(null);
        }
        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }
        if (\array_key_exists('label', $data) && null !== $data['label']) {
            $object->setLabel($data['label']);
        } elseif (\array_key_exists('label', $data) && null === $data['label']) {
            $object->setLabel(null);
        }
        if (\array_key_exists('configuration', $data) && null !== $data['configuration']) {
            $values = [];
            foreach ($data['configuration'] as $value) {
                $values[] = $value;
            }
            $object->setConfiguration($values);
        } elseif (\array_key_exists('configuration', $data) && null === $data['configuration']) {
            $object->setConfiguration(null);
        }
        if (\array_key_exists('probes', $data) && null !== $data['probes']) {
            $values_1 = [];
            foreach ($data['probes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Gyroscops\\Api\\Model\\Probe', 'json', $context);
            }
            $object->setProbes($values_1);
        } elseif (\array_key_exists('probes', $data) && null === $data['probes']) {
            $object->setProbes(null);
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
