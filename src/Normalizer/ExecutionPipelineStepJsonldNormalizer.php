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

class ExecutionPipelineStepJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\ExecutionPipelineStepJsonld' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\ExecutionPipelineStepJsonld' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\ExecutionPipelineStepJsonld();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('@context', $data) && null !== $data['@context']) {
            $object->setContext($data['@context']);
        } elseif (\array_key_exists('@context', $data) && null === $data['@context']) {
            $object->setContext(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId2($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId2(null);
        }
        if (\array_key_exists('pipeline', $data) && null !== $data['pipeline']) {
            $object->setPipeline($this->denormalizer->denormalize($data['pipeline'], 'Gyroscops\\Api\\Model\\AbstractPipelineJsonld', 'json', $context));
        } elseif (\array_key_exists('pipeline', $data) && null === $data['pipeline']) {
            $object->setPipeline(null);
        }
        if (\array_key_exists('metrics', $data) && null !== $data['metrics']) {
            $values = [];
            foreach ($data['metrics'] as $value) {
                $values[] = $value;
            }
            $object->setMetrics($values);
        } elseif (\array_key_exists('metrics', $data) && null === $data['metrics']) {
            $object->setMetrics(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['pipeline'] = $this->normalizer->normalize($object->getPipeline(), 'json', $context);
        if (null !== $object->getMetrics()) {
            $values = [];
            foreach ($object->getMetrics() as $value) {
                $values[] = $value;
            }
            $data['metrics'] = $values;
        }

        return $data;
    }
}
