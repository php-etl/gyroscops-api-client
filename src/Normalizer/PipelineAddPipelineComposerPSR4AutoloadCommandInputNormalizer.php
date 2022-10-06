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

class PipelineAddPipelineComposerPSR4AutoloadCommandInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\PipelineAddPipelineComposerPSR4AutoloadCommandInput' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\PipelineAddPipelineComposerPSR4AutoloadCommandInput' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\PipelineAddPipelineComposerPSR4AutoloadCommandInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pipeline', $data) && null !== $data['pipeline']) {
            $object->setPipeline($data['pipeline']);
        } elseif (\array_key_exists('pipeline', $data) && null === $data['pipeline']) {
            $object->setPipeline(null);
        }
        if (\array_key_exists('namespace', $data) && null !== $data['namespace']) {
            $object->setNamespace($data['namespace']);
        } elseif (\array_key_exists('namespace', $data) && null === $data['namespace']) {
            $object->setNamespace(null);
        }
        if (\array_key_exists('paths', $data) && null !== $data['paths']) {
            $values = [];
            foreach ($data['paths'] as $value) {
                $values[] = $value;
            }
            $object->setPaths($values);
        } elseif (\array_key_exists('paths', $data) && null === $data['paths']) {
            $object->setPaths(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getPipeline()) {
            $data['pipeline'] = $object->getPipeline();
        }
        if (null !== $object->getNamespace()) {
            $data['namespace'] = $object->getNamespace();
        }
        if (null !== $object->getPaths()) {
            $values = [];
            foreach ($object->getPaths() as $value) {
                $values[] = $value;
            }
            $data['paths'] = $values;
        }

        return $data;
    }
}
