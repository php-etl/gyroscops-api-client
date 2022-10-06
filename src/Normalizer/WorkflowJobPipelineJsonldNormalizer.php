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

class WorkflowJobPipelineJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Gyroscops\\Api\\Model\\WorkflowJobPipelineJsonld' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\WorkflowJobPipelineJsonld' === $data::class;
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
        $object = new \Gyroscops\Api\Model\WorkflowJobPipelineJsonld();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@context', $data) && null !== $data['@context']) {
            $object->setContext($data['@context']);
        } elseif (\array_key_exists('@context', $data) && null === $data['@context']) {
            $object->setContext(null);
        }
        if (\array_key_exists('@id', $data) && null !== $data['@id']) {
            $object->setId($data['@id']);
        } elseif (\array_key_exists('@id', $data) && null === $data['@id']) {
            $object->setId(null);
        }
        if (\array_key_exists('@type', $data) && null !== $data['@type']) {
            $object->setType($data['@type']);
        } elseif (\array_key_exists('@type', $data) && null === $data['@type']) {
            $object->setType(null);
        }
        if (\array_key_exists('job', $data) && null !== $data['job']) {
            $object->setJob($data['job']);
        } elseif (\array_key_exists('job', $data) && null === $data['job']) {
            $object->setJob(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId2($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId2(null);
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
        if (\array_key_exists('runtimeType', $data) && null !== $data['runtimeType']) {
            $object->setRuntimeType($data['runtimeType']);
        } elseif (\array_key_exists('runtimeType', $data) && null === $data['runtimeType']) {
            $object->setRuntimeType(null);
        }
        if (\array_key_exists('runtime', $data) && null !== $data['runtime']) {
            $values = [];
            foreach ($data['runtime'] as $value) {
                $values[] = $value;
            }
            $object->setRuntime($values);
        } elseif (\array_key_exists('runtime', $data) && null === $data['runtime']) {
            $object->setRuntime(null);
        }
        if (\array_key_exists('autoload', $data) && null !== $data['autoload']) {
            $values_1 = [];
            foreach ($data['autoload'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAutoload($values_1);
        } elseif (\array_key_exists('autoload', $data) && null === $data['autoload']) {
            $object->setAutoload(null);
        }
        if (\array_key_exists('steps', $data) && null !== $data['steps']) {
            $values_2 = [];
            foreach ($data['steps'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSteps($values_2);
        } elseif (\array_key_exists('steps', $data) && null === $data['steps']) {
            $object->setSteps(null);
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
        $data['job'] = $object->getJob();
        $data['id'] = $object->getId2();
        $data['code'] = $object->getCode();
        $data['label'] = $object->getLabel();
        $data['runtimeType'] = $object->getRuntimeType();
        $values = [];
        foreach ($object->getRuntime() as $value) {
            $values[] = $value;
        }
        $data['runtime'] = $values;
        $values_1 = [];
        foreach ($object->getAutoload() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['autoload'] = $values_1;
        if (null !== $object->getSteps()) {
            $values_2 = [];
            foreach ($object->getSteps() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['steps'] = $values_2;
        }

        return $data;
    }
}
