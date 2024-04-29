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

class PipelineStepStepReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\PipelineStepStepRead' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\PipelineStepStepRead' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\PipelineStepStepRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('order', $data) && null !== $data['order']) {
            $object->setOrder($data['order']);
            unset($data['order']);
        } elseif (\array_key_exists('order', $data) && null === $data['order']) {
            $object->setOrder(null);
        }
        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
            unset($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }
        if (\array_key_exists('label', $data) && null !== $data['label']) {
            $object->setLabel($data['label']);
            unset($data['label']);
        } elseif (\array_key_exists('label', $data) && null === $data['label']) {
            $object->setLabel(null);
        }
        if (\array_key_exists('pipeline', $data) && null !== $data['pipeline']) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['pipeline'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setPipeline($values);
            unset($data['pipeline']);
        } elseif (\array_key_exists('pipeline', $data) && null === $data['pipeline']) {
            $object->setPipeline(null);
        }
        if (\array_key_exists('probes', $data) && null !== $data['probes']) {
            $values_1 = [];
            foreach ($data['probes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setProbes($values_1);
            unset($data['probes']);
        } elseif (\array_key_exists('probes', $data) && null === $data['probes']) {
            $object->setProbes(null);
        }
        if (\array_key_exists('configuration', $data) && null !== $data['configuration']) {
            $values_2 = [];
            foreach ($data['configuration'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setConfiguration($values_2);
            unset($data['configuration']);
        } elseif (\array_key_exists('configuration', $data) && null === $data['configuration']) {
            $object->setConfiguration(null);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
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
        $data['order'] = $object->getOrder();
        $data['code'] = $object->getCode();
        $data['label'] = $object->getLabel();
        $values = [];
        foreach ($object->getPipeline() as $key => $value) {
            $values[$key] = $value;
        }
        $data['pipeline'] = $values;
        if ($object->isInitialized('probes') && null !== $object->getProbes()) {
            $values_1 = [];
            foreach ($object->getProbes() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['probes'] = $values_1;
        }
        $values_2 = [];
        foreach ($object->getConfiguration() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['configuration'] = $values_2;
        foreach ($object as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_3;
            }
        }

        return $data;
    }
}
