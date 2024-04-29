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

class WorkflowJobPipelineJobReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\WorkflowJobPipelineJobRead' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\WorkflowJobPipelineJobRead' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\WorkflowJobPipelineJobRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('job', $data) && null !== $data['job']) {
            $value = $data['job'];
            if (\is_array($data['job']) && isset($data['job']['workflow']) && isset($data['job']['code']) && isset($data['job']['order'])) {
                $value = $this->denormalizer->denormalize($data['job'], 'Gyroscops\\Api\\Model\\WorkflowJobJobRead', 'json', $context);
            }
            $object->setJob($value);
            unset($data['job']);
        } elseif (\array_key_exists('job', $data) && null === $data['job']) {
            $object->setJob(null);
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
        if (\array_key_exists('steps', $data) && null !== $data['steps']) {
            $values = [];
            foreach ($data['steps'] as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, 'Gyroscops\\Api\\Model\\PipelineStepJobRead', 'json', $context);
            }
            $object->setSteps($values);
            unset($data['steps']);
        } elseif (\array_key_exists('steps', $data) && null === $data['steps']) {
            $object->setSteps(null);
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
        $value = $object->getJob();
        if (\is_object($object->getJob())) {
            $value = $this->normalizer->normalize($object->getJob(), 'json', $context);
        }
        $data['job'] = $value;
        $data['code'] = $object->getCode();
        $data['label'] = $object->getLabel();
        if ($object->isInitialized('steps') && null !== $object->getSteps()) {
            $values = [];
            foreach ($object->getSteps() as $value_1) {
                $values[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['steps'] = $values;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }
}
