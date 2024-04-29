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

class ScheduleScheduleReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\ScheduleScheduleRead' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\ScheduleScheduleRead' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\ScheduleScheduleRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['type'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setType($values);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('startAt', $data) && null !== $data['startAt']) {
            $object->setStartAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['startAt']));
            unset($data['startAt']);
        } elseif (\array_key_exists('startAt', $data) && null === $data['startAt']) {
            $object->setStartAt(null);
        }
        if (\array_key_exists('interval', $data) && null !== $data['interval']) {
            $object->setInterval($data['interval']);
            unset($data['interval']);
        } elseif (\array_key_exists('interval', $data) && null === $data['interval']) {
            $object->setInterval(null);
        }
        if (\array_key_exists('endAt', $data) && null !== $data['endAt']) {
            $object->setEndAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['endAt']));
            unset($data['endAt']);
        } elseif (\array_key_exists('endAt', $data) && null === $data['endAt']) {
            $object->setEndAt(null);
        }
        if (\array_key_exists('crontab', $data) && null !== $data['crontab']) {
            $object->setCrontab($data['crontab']);
            unset($data['crontab']);
        } elseif (\array_key_exists('crontab', $data) && null === $data['crontab']) {
            $object->setCrontab(null);
        }
        if (\array_key_exists('recurrences', $data) && null !== $data['recurrences']) {
            $object->setRecurrences($data['recurrences']);
            unset($data['recurrences']);
        } elseif (\array_key_exists('recurrences', $data) && null === $data['recurrences']) {
            $object->setRecurrences(null);
        }
        if (\array_key_exists('currentVersion', $data) && null !== $data['currentVersion']) {
            $object->setCurrentVersion($data['currentVersion']);
            unset($data['currentVersion']);
        } elseif (\array_key_exists('currentVersion', $data) && null === $data['currentVersion']) {
            $object->setCurrentVersion(null);
        }
        if (\array_key_exists('executions', $data) && null !== $data['executions']) {
            $values_1 = [];
            foreach ($data['executions'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setExecutions($values_1);
            unset($data['executions']);
        } elseif (\array_key_exists('executions', $data) && null === $data['executions']) {
            $object->setExecutions(null);
        }
        if (\array_key_exists('pipeline', $data) && null !== $data['pipeline']) {
            $object->setPipeline($data['pipeline']);
            unset($data['pipeline']);
        } elseif (\array_key_exists('pipeline', $data) && null === $data['pipeline']) {
            $object->setPipeline(null);
        }
        if (\array_key_exists('workflow', $data) && null !== $data['workflow']) {
            $object->setWorkflow($data['workflow']);
            unset($data['workflow']);
        } elseif (\array_key_exists('workflow', $data) && null === $data['workflow']) {
            $object->setWorkflow(null);
        }
        if (\array_key_exists('environment', $data) && null !== $data['environment']) {
            $object->setEnvironment($data['environment']);
            unset($data['environment']);
        } elseif (\array_key_exists('environment', $data) && null === $data['environment']) {
            $object->setEnvironment(null);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
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
        $data['id'] = $object->getId();
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $values = [];
            foreach ($object->getType() as $key => $value) {
                $values[$key] = $value;
            }
            $data['type'] = $values;
        }
        if ($object->isInitialized('startAt') && null !== $object->getStartAt()) {
            $data['startAt'] = $object->getStartAt()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('interval') && null !== $object->getInterval()) {
            $data['interval'] = $object->getInterval();
        }
        if ($object->isInitialized('endAt') && null !== $object->getEndAt()) {
            $data['endAt'] = $object->getEndAt()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('crontab') && null !== $object->getCrontab()) {
            $data['crontab'] = $object->getCrontab();
        }
        if ($object->isInitialized('recurrences') && null !== $object->getRecurrences()) {
            $data['recurrences'] = $object->getRecurrences();
        }
        if ($object->isInitialized('currentVersion') && null !== $object->getCurrentVersion()) {
            $data['currentVersion'] = $object->getCurrentVersion();
        }
        if ($object->isInitialized('executions') && null !== $object->getExecutions()) {
            $values_1 = [];
            foreach ($object->getExecutions() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['executions'] = $values_1;
        }
        if ($object->isInitialized('pipeline') && null !== $object->getPipeline()) {
            $data['pipeline'] = $object->getPipeline();
        }
        if ($object->isInitialized('workflow') && null !== $object->getWorkflow()) {
            $data['workflow'] = $object->getWorkflow();
        }
        if ($object->isInitialized('environment') && null !== $object->getEnvironment()) {
            $data['environment'] = $object->getEnvironment();
        }
        foreach ($object as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_2;
            }
        }

        return $data;
    }
}
