<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Normalizer;

use Gyroscops\Api\Runtime\Normalizer\CheckArray;
use Gyroscops\Api\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ExecutionPipelineJobJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Gyroscops\\Api\\Model\\ExecutionPipelineJobJsonld';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\ExecutionPipelineJobJsonld';
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
        $object = new \Gyroscops\Api\Model\ExecutionPipelineJobJsonld();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@id', $data) && $data['@id'] !== null) {
            $object->setId($data['@id']);
            unset($data['@id']);
        } elseif (\array_key_exists('@id', $data) && $data['@id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('@type', $data) && $data['@type'] !== null) {
            $object->setType($data['@type']);
            unset($data['@type']);
        } elseif (\array_key_exists('@type', $data) && $data['@type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('@context', $data) && $data['@context'] !== null) {
            $object->setContext($data['@context']);
            unset($data['@context']);
        } elseif (\array_key_exists('@context', $data) && $data['@context'] === null) {
            $object->setContext(null);
        }
        if (\array_key_exists('job', $data) && $data['job'] !== null) {
            $object->setJob($data['job']);
            unset($data['job']);
        } elseif (\array_key_exists('job', $data) && $data['job'] === null) {
            $object->setJob(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId2($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId2(null);
        }
        if (\array_key_exists('steps', $data) && $data['steps'] !== null) {
            $values = [];
            foreach ($data['steps'] as $value) {
                $values[] = $value;
            }
            $object->setSteps($values);
            unset($data['steps']);
        } elseif (\array_key_exists('steps', $data) && $data['steps'] === null) {
            $object->setSteps(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['job'] = $object->getJob();
        if ($object->isInitialized('steps') && null !== $object->getSteps()) {
            $values = [];
            foreach ($object->getSteps() as $value) {
                $values[] = $value;
            }
            $data['steps'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }
}
