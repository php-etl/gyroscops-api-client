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

class CompilationCompilePipelineCommandJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === \Gyroscops\Api\Model\CompilationCompilePipelineCommandJsonld::class;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data::class === \Gyroscops\Api\Model\CompilationCompilePipelineCommandJsonld::class;
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
        $object = new \Gyroscops\Api\Model\CompilationCompilePipelineCommandJsonld();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@context', $data) && $data['@context'] !== null) {
            $object->setContext($data['@context']);
        } elseif (\array_key_exists('@context', $data) && $data['@context'] === null) {
            $object->setContext(null);
        }
        if (\array_key_exists('@id', $data) && $data['@id'] !== null) {
            $object->setId($data['@id']);
        } elseif (\array_key_exists('@id', $data) && $data['@id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('@type', $data) && $data['@type'] !== null) {
            $object->setType($data['@type']);
        } elseif (\array_key_exists('@type', $data) && $data['@type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId2($this->denormalizer->denormalize($data['id'], \Gyroscops\Api\Model\PipelineIdJsonld::class, 'json', $context));
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId2(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getId2()) {
            $data['id'] = $this->normalizer->normalize($object->getId2(), 'json', $context);
        }

        return $data;
    }
}
