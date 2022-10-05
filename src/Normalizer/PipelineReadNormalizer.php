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

class PipelineReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\PipelineRead' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\PipelineRead' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\PipelineRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('isSoftDeleted', $data)) {
            $object->setIsSoftDeleted($data['isSoftDeleted']);
        }
        if (\array_key_exists('compiledAt', $data) && null !== $data['compiledAt']) {
            $object->setCompiledAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['compiledAt']));
        } elseif (\array_key_exists('compiledAt', $data) && null === $data['compiledAt']) {
            $object->setCompiledAt(null);
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
            $values = [];
            foreach ($data['runtime'] as $value) {
                $values[] = $value;
            }
            $object->setRuntime($values);
        }
        if (\array_key_exists('autoload', $data)) {
            $values_1 = [];
            foreach ($data['autoload'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAutoload($values_1);
        }
        if (\array_key_exists('steps', $data)) {
            $values_2 = [];
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
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getIsSoftDeleted()) {
            $data['isSoftDeleted'] = $object->getIsSoftDeleted();
        }
        if (null !== $object->getCompiledAt()) {
            $data['compiledAt'] = $object->getCompiledAt()->format('Y-m-d\\TH:i:sP');
        }
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
