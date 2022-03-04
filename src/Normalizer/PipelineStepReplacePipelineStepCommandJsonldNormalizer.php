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
class PipelineStepReplacePipelineStepCommandJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Api\\Model\\PipelineStepReplacePipelineStepCommandJsonld';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\PipelineStepReplacePipelineStepCommandJsonld';
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
        $object = new \Gyroscops\Api\Model\PipelineStepReplacePipelineStepCommandJsonld();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@context', $data)) {
            $object->setContext($data['@context']);
        }
        if (\array_key_exists('@id', $data)) {
            $object->setId($data['@id']);
        }
        if (\array_key_exists('@type', $data)) {
            $object->setType($data['@type']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId2($this->denormalizer->denormalize($data['id'], 'Gyroscops\\Api\\Model\\PipelineIdJsonld', 'json', $context));
        }
        if (\array_key_exists('former', $data)) {
            $object->setFormer($this->denormalizer->denormalize($data['former'], 'Gyroscops\\Api\\Model\\StepCodeJsonld', 'json', $context));
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($this->denormalizer->denormalize($data['code'], 'Gyroscops\\Api\\Model\\StepCodeJsonld', 'json', $context));
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
        }
        if (\array_key_exists('configuration', $data)) {
            $values = array();
            foreach ($data['configuration'] as $value) {
                $values[] = $value;
            }
            $object->setConfiguration($values);
        }
        if (\array_key_exists('probes', $data)) {
            $object->setProbes($this->denormalizer->denormalize($data['probes'], 'Gyroscops\\Api\\Model\\ProbeListJsonld', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId2()) {
            $data['id'] = $this->normalizer->normalize($object->getId2(), 'json', $context);
        }
        if (null !== $object->getFormer()) {
            $data['former'] = $this->normalizer->normalize($object->getFormer(), 'json', $context);
        }
        if (null !== $object->getCode()) {
            $data['code'] = $this->normalizer->normalize($object->getCode(), 'json', $context);
        }
        if (null !== $object->getLabel()) {
            $data['label'] = $object->getLabel();
        }
        if (null !== $object->getConfiguration()) {
            $values = array();
            foreach ($object->getConfiguration() as $value) {
                $values[] = $value;
            }
            $data['configuration'] = $values;
        }
        if (null !== $object->getProbes()) {
            $data['probes'] = $this->normalizer->normalize($object->getProbes(), 'json', $context);
        }
        return $data;
    }
}