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

class ExecutionUpdatePipelineExecutionStateCommandInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\ExecutionUpdatePipelineExecutionStateCommandInput' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\ExecutionUpdatePipelineExecutionStateCommandInput' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\ExecutionUpdatePipelineExecutionStateCommandInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('execution', $data) && null !== $data['execution']) {
            $object->setExecution($data['execution']);
        } elseif (\array_key_exists('execution', $data) && null === $data['execution']) {
            $object->setExecution(null);
        }
        if (\array_key_exists('stepsUpdates', $data) && null !== $data['stepsUpdates']) {
            $object->setStepsUpdates($this->denormalizer->denormalize($data['stepsUpdates'], 'Gyroscops\\Api\\Model\\UpdateList', 'json', $context));
        } elseif (\array_key_exists('stepsUpdates', $data) && null === $data['stepsUpdates']) {
            $object->setStepsUpdates(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getExecution()) {
            $data['execution'] = $object->getExecution();
        }
        if (null !== $object->getStepsUpdates()) {
            $data['stepsUpdates'] = $this->normalizer->normalize($object->getStepsUpdates(), 'json', $context);
        }

        return $data;
    }
}
