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

class WorkflowJobReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Gyroscops\\Api\\Model\\WorkflowJobRead';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\WorkflowJobRead';
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
        $object = new \Gyroscops\Api\Model\WorkflowJobRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('workflow', $data) && $data['workflow'] !== null) {
            $value = $data['workflow'];
            if (is_array($data['workflow']) and isset($data['workflow']['id']) and isset($data['workflow']['code']) and isset($data['workflow']['label']) and isset($data['workflow']['repositories']) and isset($data['workflow']['auths'])) {
                $value = $this->denormalizer->denormalize($data['workflow'], 'Gyroscops\\Api\\Model\\WorkflowRead', 'json', $context);
            }
            $object->setWorkflow($value);
            unset($data['workflow']);
        } elseif (\array_key_exists('workflow', $data) && $data['workflow'] === null) {
            $object->setWorkflow(null);
        }
        if (\array_key_exists('pipeline', $data) && $data['pipeline'] !== null) {
            $value_1 = $data['pipeline'];
            if (is_array($data['pipeline']) and isset($data['pipeline']['id']) and isset($data['pipeline']['code']) and isset($data['pipeline']['label'])) {
                $value_1 = $this->denormalizer->denormalize($data['pipeline'], 'Gyroscops\\Api\\Model\\WorkflowJobPipelineRead', 'json', $context);
            }
            $object->setPipeline($value_1);
            unset($data['pipeline']);
        } elseif (\array_key_exists('pipeline', $data) && $data['pipeline'] === null) {
            $object->setPipeline(null);
        }
        if (\array_key_exists('action', $data) && $data['action'] !== null) {
            $value_2 = $data['action'];
            if (is_array($data['action']) and isset($data['action']['code']) and isset($data['action']['label']) and isset($data['action']['configuration'])) {
                $value_2 = $this->denormalizer->denormalize($data['action'], 'Gyroscops\\Api\\Model\\WorkflowJobActionRead', 'json', $context);
            }
            $object->setAction($value_2);
            unset($data['action']);
        } elseif (\array_key_exists('action', $data) && $data['action'] === null) {
            $object->setAction(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        $value = $object->getWorkflow();
        if (is_object($object->getWorkflow())) {
            $value = $this->normalizer->normalize($object->getWorkflow(), 'json', $context);
        }
        $data['workflow'] = $value;
        if ($object->isInitialized('pipeline') && null !== $object->getPipeline()) {
            $value_1 = $object->getPipeline();
            if (is_object($object->getPipeline())) {
                $value_1 = $this->normalizer->normalize($object->getPipeline(), 'json', $context);
            }
            $data['pipeline'] = $value_1;
        }
        if ($object->isInitialized('action') && null !== $object->getAction()) {
            $value_2 = $object->getAction();
            if (is_object($object->getAction())) {
                $value_2 = $this->normalizer->normalize($object->getAction(), 'json', $context);
            }
            $data['action'] = $value_2;
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }

        return $data;
    }
}
