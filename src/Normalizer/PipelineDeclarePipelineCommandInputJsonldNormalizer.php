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
class PipelineDeclarePipelineCommandInputJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Api\\Model\\PipelineDeclarePipelineCommandInputJsonld';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\PipelineDeclarePipelineCommandInputJsonld';
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
        $object = new \Gyroscops\Api\Model\PipelineDeclarePipelineCommandInputJsonld();
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
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('workspace', $data)) {
            $object->setWorkspace($data['workspace']);
        }
        if (\array_key_exists('organization', $data) && $data['organization'] !== null) {
            $object->setOrganization($data['organization']);
        }
        elseif (\array_key_exists('organization', $data) && $data['organization'] === null) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('steps', $data)) {
            $values = array();
            foreach ($data['steps'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Api\\Model\\StepInputJsonld', 'json', $context);
            }
            $object->setSteps($values);
        }
        if (\array_key_exists('autoloads', $data)) {
            $values_1 = array();
            foreach ($data['autoloads'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Gyroscops\\Api\\Model\\AutoloadInputJsonld', 'json', $context);
            }
            $object->setAutoloads($values_1);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLabel()) {
            $data['label'] = $object->getLabel();
        }
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getWorkspace()) {
            $data['workspace'] = $object->getWorkspace();
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $object->getOrganization();
        }
        if (null !== $object->getSteps()) {
            $values = array();
            foreach ($object->getSteps() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['steps'] = $values;
        }
        if (null !== $object->getAutoloads()) {
            $values_1 = array();
            foreach ($object->getAutoloads() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['autoloads'] = $values_1;
        }
        return $data;
    }
}