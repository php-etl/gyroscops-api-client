<?php

namespace Gyroscops\Api\Normalizer;

use Gyroscops\Api\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class WorkflowJobPipelineReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\WorkflowJobPipelineRead' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\WorkflowJobPipelineRead' === get_class($data);
    }

    /**
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
        $object = new \Gyroscops\Api\Model\WorkflowJobPipelineRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
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
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['id'] = $object->getId();
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
