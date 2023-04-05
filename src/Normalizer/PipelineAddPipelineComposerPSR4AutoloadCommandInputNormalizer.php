<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

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

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return \Gyroscops\Api\Model\PipelineAddPipelineComposerPSR4AutoloadCommandInput::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && \Gyroscops\Api\Model\PipelineAddPipelineComposerPSR4AutoloadCommandInput::class === $data::class;
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
        $object = new \Gyroscops\Api\Model\PipelineAddPipelineComposerPSR4AutoloadCommandInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['namespace'] = $object->getNamespace();
        $values = [];
        foreach ($object->getPaths() as $value) {
            $values[] = $value;
        }
        $data['paths'] = $values;

        return $data;
    }
}
