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

class ExecutionDeclarePipelineExecutionCommandInputJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\ExecutionDeclarePipelineExecutionCommandInputJsonld' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\ExecutionDeclarePipelineExecutionCommandInputJsonld' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\ExecutionDeclarePipelineExecutionCommandInputJsonld();
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
        if (\array_key_exists('schedule', $data) && null !== $data['schedule']) {
            $object->setSchedule($data['schedule']);
        } elseif (\array_key_exists('schedule', $data) && null === $data['schedule']) {
            $object->setSchedule(null);
        }
        if (\array_key_exists('pipeline', $data) && null !== $data['pipeline']) {
            $object->setPipeline($data['pipeline']);
        } elseif (\array_key_exists('pipeline', $data) && null === $data['pipeline']) {
            $object->setPipeline(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getSchedule()) {
            $data['schedule'] = $object->getSchedule();
        }
        if (null !== $object->getPipeline()) {
            $data['pipeline'] = $object->getPipeline();
        }

        return $data;
    }
}
