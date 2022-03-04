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
class ExecutionReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Api\\Model\\ExecutionRead';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\ExecutionRead';
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
        $object = new \Gyroscops\Api\Model\ExecutionRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
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
        if (\array_key_exists('scheduledAt', $data) && $data['scheduledAt'] !== null) {
            $object->setScheduledAt($data['scheduledAt']);
        }
        elseif (\array_key_exists('scheduledAt', $data) && $data['scheduledAt'] === null) {
            $object->setScheduledAt(null);
        }
        if (\array_key_exists('startedAt', $data) && $data['startedAt'] !== null) {
            $object->setStartedAt($data['startedAt']);
        }
        elseif (\array_key_exists('startedAt', $data) && $data['startedAt'] === null) {
            $object->setStartedAt(null);
        }
        if (\array_key_exists('finishedAt', $data) && $data['finishedAt'] !== null) {
            $object->setFinishedAt($data['finishedAt']);
        }
        elseif (\array_key_exists('finishedAt', $data) && $data['finishedAt'] === null) {
            $object->setFinishedAt(null);
        }
        if (\array_key_exists('interruptedAt', $data) && $data['interruptedAt'] !== null) {
            $object->setInterruptedAt($data['interruptedAt']);
        }
        elseif (\array_key_exists('interruptedAt', $data) && $data['interruptedAt'] === null) {
            $object->setInterruptedAt(null);
        }
        if (\array_key_exists('resumedAt', $data) && $data['resumedAt'] !== null) {
            $object->setResumedAt($data['resumedAt']);
        }
        elseif (\array_key_exists('resumedAt', $data) && $data['resumedAt'] === null) {
            $object->setResumedAt(null);
        }
        if (\array_key_exists('updatedAt', $data) && $data['updatedAt'] !== null) {
            $object->setUpdatedAt($data['updatedAt']);
        }
        elseif (\array_key_exists('updatedAt', $data) && $data['updatedAt'] === null) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('terminatedAt', $data) && $data['terminatedAt'] !== null) {
            $object->setTerminatedAt($data['terminatedAt']);
        }
        elseif (\array_key_exists('terminatedAt', $data) && $data['terminatedAt'] === null) {
            $object->setTerminatedAt(null);
        }
        if (\array_key_exists('reason', $data) && $data['reason'] !== null) {
            $object->setReason($data['reason']);
        }
        elseif (\array_key_exists('reason', $data) && $data['reason'] === null) {
            $object->setReason(null);
        }
        if (\array_key_exists('pipeline', $data) && $data['pipeline'] !== null) {
            $object->setPipeline($data['pipeline']);
        }
        elseif (\array_key_exists('pipeline', $data) && $data['pipeline'] === null) {
            $object->setPipeline(null);
        }
        if (\array_key_exists('workflow', $data) && $data['workflow'] !== null) {
            $object->setWorkflow($data['workflow']);
        }
        elseif (\array_key_exists('workflow', $data) && $data['workflow'] === null) {
            $object->setWorkflow(null);
        }
        if (\array_key_exists('action', $data) && $data['action'] !== null) {
            $object->setAction($data['action']);
        }
        elseif (\array_key_exists('action', $data) && $data['action'] === null) {
            $object->setAction(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['code'] = $object->getCode();
        $data['status'] = $object->getStatus();
        $data['errors'] = $object->getErrors();
        $data['scheduledAt'] = $object->getScheduledAt();
        if (null !== $object->getStartedAt()) {
            $data['startedAt'] = $object->getStartedAt();
        }
        if (null !== $object->getFinishedAt()) {
            $data['finishedAt'] = $object->getFinishedAt();
        }
        if (null !== $object->getInterruptedAt()) {
            $data['interruptedAt'] = $object->getInterruptedAt();
        }
        if (null !== $object->getResumedAt()) {
            $data['resumedAt'] = $object->getResumedAt();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt();
        }
        if (null !== $object->getTerminatedAt()) {
            $data['terminatedAt'] = $object->getTerminatedAt();
        }
        $data['reason'] = $object->getReason();
        $data['pipeline'] = $object->getPipeline();
        $data['workflow'] = $object->getWorkflow();
        $data['action'] = $object->getAction();
        return $data;
    }
}