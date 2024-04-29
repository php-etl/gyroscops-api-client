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

class PipelineStepJobReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\PipelineStepJobRead' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\PipelineStepJobRead' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\PipelineStepJobRead();
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
            $object->setPipeline($this->denormalizer->denormalize($data['pipeline'], 'Gyroscops\\Api\\Model\\AbstractPipelineJobRead', 'json', $context));
            unset($data['pipeline']);
        } elseif (\array_key_exists('pipeline', $data) && null === $data['pipeline']) {
            $object->setPipeline(null);
        }
        if (\array_key_exists('probes', $data) && null !== $data['probes']) {
            $values = [];
            foreach ($data['probes'] as $value) {
                $values[] = $value;
            }
            $object->setProbes($values);
            unset($data['probes']);
        } elseif (\array_key_exists('probes', $data) && null === $data['probes']) {
            $object->setProbes(null);
        }
        if (\array_key_exists('configuration', $data) && null !== $data['configuration']) {
            $values_1 = [];
            foreach ($data['configuration'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setConfiguration($values_1);
            unset($data['configuration']);
        } elseif (\array_key_exists('configuration', $data) && null === $data['configuration']) {
            $object->setConfiguration(null);
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
        $data['order'] = $object->getOrder();
        $data['code'] = $object->getCode();
        $data['label'] = $object->getLabel();
        $data['pipeline'] = $this->normalizer->normalize($object->getPipeline(), 'json', $context);
        if ($object->isInitialized('probes') && null !== $object->getProbes()) {
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
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }
}
