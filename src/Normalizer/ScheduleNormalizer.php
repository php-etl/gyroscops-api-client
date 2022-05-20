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
class ScheduleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Api\\Model\\Schedule';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\Schedule';
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
        $object = new \Gyroscops\Api\Model\Schedule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('startAt', $data) && $data['startAt'] !== null) {
            $object->setStartAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['startAt']));
        }
        elseif (\array_key_exists('startAt', $data) && $data['startAt'] === null) {
            $object->setStartAt(null);
        }
        if (\array_key_exists('interval', $data) && $data['interval'] !== null) {
            $object->setInterval($data['interval']);
        }
        elseif (\array_key_exists('interval', $data) && $data['interval'] === null) {
            $object->setInterval(null);
        }
        if (\array_key_exists('endAt', $data) && $data['endAt'] !== null) {
            $object->setEndAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['endAt']));
        }
        elseif (\array_key_exists('endAt', $data) && $data['endAt'] === null) {
            $object->setEndAt(null);
        }
        if (\array_key_exists('recurrences', $data) && $data['recurrences'] !== null) {
            $object->setRecurrences($data['recurrences']);
        }
        elseif (\array_key_exists('recurrences', $data) && $data['recurrences'] === null) {
            $object->setRecurrences(null);
        }
        if (\array_key_exists('executions', $data)) {
            $values = array();
            foreach ($data['executions'] as $value) {
                $values[] = $value;
            }
            $object->setExecutions($values);
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
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($data['owner']);
        }
        if (\array_key_exists('workspace', $data)) {
            $object->setWorkspace($data['workspace']);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($data['organization']);
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
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getStartAt()) {
            $data['startAt'] = $object->getStartAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getInterval()) {
            $data['interval'] = $object->getInterval();
        }
        if (null !== $object->getEndAt()) {
            $data['endAt'] = $object->getEndAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getRecurrences()) {
            $data['recurrences'] = $object->getRecurrences();
        }
        if (null !== $object->getExecutions()) {
            $values = array();
            foreach ($object->getExecutions() as $value) {
                $values[] = $value;
            }
            $data['executions'] = $values;
        }
        if (null !== $object->getPipeline()) {
            $data['pipeline'] = $object->getPipeline();
        }
        if (null !== $object->getWorkflow()) {
            $data['workflow'] = $object->getWorkflow();
        }
        $data['owner'] = $object->getOwner();
        $data['workspace'] = $object->getWorkspace();
        $data['organization'] = $object->getOrganization();
        return $data;
    }
}