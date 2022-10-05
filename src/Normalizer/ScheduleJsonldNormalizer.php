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

class ScheduleJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\ScheduleJsonld' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\ScheduleJsonld' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\ScheduleJsonld();
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
        if (\array_key_exists('type', $data)) {
            $object->setType2($data['type']);
        }
        if (\array_key_exists('startAt', $data) && null !== $data['startAt']) {
            $object->setStartAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['startAt']));
        } elseif (\array_key_exists('startAt', $data) && null === $data['startAt']) {
            $object->setStartAt(null);
        }
        if (\array_key_exists('interval', $data) && null !== $data['interval']) {
            $object->setInterval($data['interval']);
        } elseif (\array_key_exists('interval', $data) && null === $data['interval']) {
            $object->setInterval(null);
        }
        if (\array_key_exists('endAt', $data) && null !== $data['endAt']) {
            $object->setEndAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['endAt']));
        } elseif (\array_key_exists('endAt', $data) && null === $data['endAt']) {
            $object->setEndAt(null);
        }
        if (\array_key_exists('recurrences', $data) && null !== $data['recurrences']) {
            $object->setRecurrences($data['recurrences']);
        } elseif (\array_key_exists('recurrences', $data) && null === $data['recurrences']) {
            $object->setRecurrences(null);
        }
        if (\array_key_exists('executions', $data)) {
            $values = [];
            foreach ($data['executions'] as $value) {
                $values[] = $value;
            }
            $object->setExecutions($values);
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
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['id'] = $object->getId2();
        if (null !== $object->getType2()) {
            $data['type'] = $object->getType2();
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
            $values = [];
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
