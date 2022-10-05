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

class ExecutionJsonldReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\ExecutionJsonldRead' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\ExecutionJsonldRead' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\ExecutionJsonldRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@id', $data)) {
            $object->setId($data['@id']);
        }
        if (\array_key_exists('@type', $data)) {
            $object->setType($data['@type']);
        }
        if (\array_key_exists('@context', $data)) {
            $object->setContext($data['@context']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId2($data['id']);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('errors', $data)) {
            $object->setErrors($data['errors']);
        }
        if (\array_key_exists('scheduledAt', $data) && null !== $data['scheduledAt']) {
            $object->setScheduledAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['scheduledAt']));
        } elseif (\array_key_exists('scheduledAt', $data) && null === $data['scheduledAt']) {
            $object->setScheduledAt(null);
        }
        if (\array_key_exists('startedAt', $data) && null !== $data['startedAt']) {
            $object->setStartedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['startedAt']));
        } elseif (\array_key_exists('startedAt', $data) && null === $data['startedAt']) {
            $object->setStartedAt(null);
        }
        if (\array_key_exists('finishedAt', $data) && null !== $data['finishedAt']) {
            $object->setFinishedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['finishedAt']));
        } elseif (\array_key_exists('finishedAt', $data) && null === $data['finishedAt']) {
            $object->setFinishedAt(null);
        }
        if (\array_key_exists('interruptedAt', $data) && null !== $data['interruptedAt']) {
            $object->setInterruptedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['interruptedAt']));
        } elseif (\array_key_exists('interruptedAt', $data) && null === $data['interruptedAt']) {
            $object->setInterruptedAt(null);
        }
        if (\array_key_exists('resumedAt', $data) && null !== $data['resumedAt']) {
            $object->setResumedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['resumedAt']));
        } elseif (\array_key_exists('resumedAt', $data) && null === $data['resumedAt']) {
            $object->setResumedAt(null);
        }
        if (\array_key_exists('updatedAt', $data) && null !== $data['updatedAt']) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updatedAt']));
        } elseif (\array_key_exists('updatedAt', $data) && null === $data['updatedAt']) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('terminatedAt', $data) && null !== $data['terminatedAt']) {
            $object->setTerminatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['terminatedAt']));
        } elseif (\array_key_exists('terminatedAt', $data) && null === $data['terminatedAt']) {
            $object->setTerminatedAt(null);
        }
        if (\array_key_exists('reason', $data) && null !== $data['reason']) {
            $object->setReason($data['reason']);
        } elseif (\array_key_exists('reason', $data) && null === $data['reason']) {
            $object->setReason(null);
        }
        if (\array_key_exists('pipeline', $data) && null !== $data['pipeline']) {
            $object->setPipeline($data['pipeline']);
        } elseif (\array_key_exists('pipeline', $data) && null === $data['pipeline']) {
            $object->setPipeline(null);
        }
        if (\array_key_exists('workflow', $data) && null !== $data['workflow']) {
            $object->setWorkflow($data['workflow']);
        } elseif (\array_key_exists('workflow', $data) && null === $data['workflow']) {
            $object->setWorkflow(null);
        }
        if (\array_key_exists('action', $data) && null !== $data['action']) {
            $object->setAction($data['action']);
        } elseif (\array_key_exists('action', $data) && null === $data['action']) {
            $object->setAction(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['id'] = $object->getId2();
        $data['code'] = $object->getCode();
        $data['status'] = $object->getStatus();
        $data['errors'] = $object->getErrors();
        $data['scheduledAt'] = $object->getScheduledAt()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getStartedAt()) {
            $data['startedAt'] = $object->getStartedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getFinishedAt()) {
            $data['finishedAt'] = $object->getFinishedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getInterruptedAt()) {
            $data['interruptedAt'] = $object->getInterruptedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getResumedAt()) {
            $data['resumedAt'] = $object->getResumedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getTerminatedAt()) {
            $data['terminatedAt'] = $object->getTerminatedAt()->format('Y-m-d\\TH:i:sP');
        }
        $data['reason'] = $object->getReason();
        $data['pipeline'] = $object->getPipeline();
        $data['workflow'] = $object->getWorkflow();
        $data['action'] = $object->getAction();

        return $data;
    }
}
