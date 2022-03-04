<?php

namespace Gyroscops\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Gyroscops\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class WorkflowJobPipelineNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Api\\Model\\WorkflowJobPipeline';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\WorkflowJobPipeline';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\WorkflowJobPipeline();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('job', $data) && $data['job'] !== null) {
            $object->setJob($data['job']);
        }
        elseif (\array_key_exists('job', $data) && $data['job'] === null) {
            $object->setJob(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
        }
        if (\array_key_exists('runtimeType', $data)) {
            $object->setRuntimeType($data['runtimeType']);
        }
        if (\array_key_exists('runtime', $data)) {
            $values = array();
            foreach ($data['runtime'] as $value) {
                $values[] = $value;
            }
            $object->setRuntime($values);
        }
        if (\array_key_exists('composer', $data)) {
            $values_1 = array();
            foreach ($data['composer'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setComposer($values_1);
        }
        if (\array_key_exists('steps', $data)) {
            $values_2 = array();
            foreach ($data['steps'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSteps($values_2);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['job'] = $object->getJob();
        $data['id'] = $object->getId();
        $data['code'] = $object->getCode();
        $data['label'] = $object->getLabel();
        $data['runtimeType'] = $object->getRuntimeType();
        $values = array();
        foreach ($object->getRuntime() as $value) {
            $values[] = $value;
        }
        $data['runtime'] = $values;
        $values_1 = array();
        foreach ($object->getComposer() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['composer'] = $values_1;
        if (null !== $object->getSteps()) {
            $values_2 = array();
            foreach ($object->getSteps() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['steps'] = $values_2;
        }
        return $data;
    }
}