<?php

declare(strict_types=1);

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

class WorkflowJobJsonldJobReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\WorkflowJobJsonldJobRead' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\WorkflowJobJsonldJobRead' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\WorkflowJobJsonldJobRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@context', $data) && null !== $data['@context']) {
            $object->setContext($data['@context']);
            unset($data['@context']);
        } elseif (\array_key_exists('@context', $data) && null === $data['@context']) {
            $object->setContext(null);
        }
        if (\array_key_exists('@id', $data) && null !== $data['@id']) {
            $object->setId($data['@id']);
            unset($data['@id']);
        } elseif (\array_key_exists('@id', $data) && null === $data['@id']) {
            $object->setId(null);
        }
        if (\array_key_exists('@type', $data) && null !== $data['@type']) {
            $object->setType($data['@type']);
            unset($data['@type']);
        } elseif (\array_key_exists('@type', $data) && null === $data['@type']) {
            $object->setType(null);
        }
        if (\array_key_exists('workflow', $data) && null !== $data['workflow']) {
            $object->setWorkflow($data['workflow']);
            unset($data['workflow']);
        } elseif (\array_key_exists('workflow', $data) && null === $data['workflow']) {
            $object->setWorkflow(null);
        }
        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
            unset($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }
        if (\array_key_exists('order', $data) && null !== $data['order']) {
            $object->setOrder($data['order']);
            unset($data['order']);
        } elseif (\array_key_exists('order', $data) && null === $data['order']) {
            $object->setOrder(null);
        }
        if (\array_key_exists('pipeline', $data) && null !== $data['pipeline']) {
            $value = $data['pipeline'];
            if (\is_array($data['pipeline']) && isset($data['pipeline']['job']) && isset($data['pipeline']['code']) && isset($data['pipeline']['label'])) {
                $value = $this->denormalizer->denormalize($data['pipeline'], 'Gyroscops\\Api\\Model\\WorkflowJobPipelineJsonldJobRead', 'json', $context);
            }
            $object->setPipeline($value);
            unset($data['pipeline']);
        } elseif (\array_key_exists('pipeline', $data) && null === $data['pipeline']) {
            $object->setPipeline(null);
        }
        if (\array_key_exists('action', $data) && null !== $data['action']) {
            $value_1 = $data['action'];
            if (\is_array($data['action']) && isset($data['action']['job']) && isset($data['action']['code']) && isset($data['action']['label']) && isset($data['action']['configuration'])) {
                $value_1 = $this->denormalizer->denormalize($data['action'], 'Gyroscops\\Api\\Model\\WorkflowJobActionJsonldJobRead', 'json', $context);
            }
            $object->setAction($value_1);
            unset($data['action']);
        } elseif (\array_key_exists('action', $data) && null === $data['action']) {
            $object->setAction(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        $data['workflow'] = $object->getWorkflow();
        $data['code'] = $object->getCode();
        $data['order'] = $object->getOrder();
        if ($object->isInitialized('pipeline') && null !== $object->getPipeline()) {
            $value = $object->getPipeline();
            if (\is_object($object->getPipeline())) {
                $value = $this->normalizer->normalize($object->getPipeline(), 'json', $context);
            }
            $data['pipeline'] = $value;
        }
        if ($object->isInitialized('action') && null !== $object->getAction()) {
            $value_1 = $object->getAction();
            if (\is_object($object->getAction())) {
                $value_1 = $this->normalizer->normalize($object->getAction(), 'json', $context);
            }
            $data['action'] = $value_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }
}
