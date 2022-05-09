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

class ExecutionResumePipelineExecutionCommandInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @param mixed      $data
     * @param mixed      $type
     * @param mixed|null $format
     *
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\ExecutionResumePipelineExecutionCommandInput' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\ExecutionResumePipelineExecutionCommandInput' === $data::class;
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
        $object = new \Gyroscops\Api\Model\ExecutionResumePipelineExecutionCommandInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('execution', $data)) {
            $object->setExecution($data['execution']);
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
        if (null !== $object->getExecution()) {
            $data['execution'] = $object->getExecution();
        }

        return $data;
    }
}
