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

class ExecutionJsonldExecutionReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\ExecutionJsonldExecutionRead' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\ExecutionJsonldExecutionRead' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\ExecutionJsonldExecutionRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('@context', $data) && null !== $data['@context']) {
            $object->setContext($data['@context']);
            unset($data['@context']);
        } elseif (\array_key_exists('@context', $data) && null === $data['@context']) {
            $object->setContext(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId2($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId2(null);
        }
        if (\array_key_exists('owner', $data) && null !== $data['owner']) {
            $object->setOwner($data['owner']);
            unset($data['owner']);
        } elseif (\array_key_exists('owner', $data) && null === $data['owner']) {
            $object->setOwner(null);
        }
        if (\array_key_exists('workspace', $data) && null !== $data['workspace']) {
            $object->setWorkspace($data['workspace']);
            unset($data['workspace']);
        } elseif (\array_key_exists('workspace', $data) && null === $data['workspace']) {
            $object->setWorkspace(null);
        }
        if (\array_key_exists('organization', $data) && null !== $data['organization']) {
            $object->setOrganization($data['organization']);
            unset($data['organization']);
        } elseif (\array_key_exists('organization', $data) && null === $data['organization']) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
            unset($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('errors', $data) && null !== $data['errors']) {
            $object->setErrors($data['errors']);
            unset($data['errors']);
        } elseif (\array_key_exists('errors', $data) && null === $data['errors']) {
            $object->setErrors(null);
        }
        if (\array_key_exists('scheduledAt', $data) && null !== $data['scheduledAt']) {
            $object->setScheduledAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['scheduledAt']));
            unset($data['scheduledAt']);
        } elseif (\array_key_exists('scheduledAt', $data) && null === $data['scheduledAt']) {
            $object->setScheduledAt(null);
        }
        if (\array_key_exists('startedAt', $data) && null !== $data['startedAt']) {
            $object->setStartedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['startedAt']));
            unset($data['startedAt']);
        } elseif (\array_key_exists('startedAt', $data) && null === $data['startedAt']) {
            $object->setStartedAt(null);
        }
        if (\array_key_exists('finishedAt', $data) && null !== $data['finishedAt']) {
            $object->setFinishedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['finishedAt']));
            unset($data['finishedAt']);
        } elseif (\array_key_exists('finishedAt', $data) && null === $data['finishedAt']) {
            $object->setFinishedAt(null);
        }
        if (\array_key_exists('interruptedAt', $data) && null !== $data['interruptedAt']) {
            $object->setInterruptedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['interruptedAt']));
            unset($data['interruptedAt']);
        } elseif (\array_key_exists('interruptedAt', $data) && null === $data['interruptedAt']) {
            $object->setInterruptedAt(null);
        }
        if (\array_key_exists('resumedAt', $data) && null !== $data['resumedAt']) {
            $object->setResumedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['resumedAt']));
            unset($data['resumedAt']);
        } elseif (\array_key_exists('resumedAt', $data) && null === $data['resumedAt']) {
            $object->setResumedAt(null);
        }
        if (\array_key_exists('updatedAt', $data) && null !== $data['updatedAt']) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updatedAt']));
            unset($data['updatedAt']);
        } elseif (\array_key_exists('updatedAt', $data) && null === $data['updatedAt']) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('terminatedAt', $data) && null !== $data['terminatedAt']) {
            $object->setTerminatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['terminatedAt']));
            unset($data['terminatedAt']);
        } elseif (\array_key_exists('terminatedAt', $data) && null === $data['terminatedAt']) {
            $object->setTerminatedAt(null);
        }
        if (\array_key_exists('reason', $data) && null !== $data['reason']) {
            $object->setReason($data['reason']);
            unset($data['reason']);
        } elseif (\array_key_exists('reason', $data) && null === $data['reason']) {
            $object->setReason(null);
        }
        if (\array_key_exists('currentVersion', $data) && null !== $data['currentVersion']) {
            $object->setCurrentVersion($data['currentVersion']);
            unset($data['currentVersion']);
        } elseif (\array_key_exists('currentVersion', $data) && null === $data['currentVersion']) {
            $object->setCurrentVersion(null);
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
        if (\array_key_exists('action', $data) && null !== $data['action']) {
            $object->setAction($data['action']);
            unset($data['action']);
        } elseif (\array_key_exists('action', $data) && null === $data['action']) {
            $object->setAction(null);
        }
        if (\array_key_exists('schedule', $data) && null !== $data['schedule']) {
            $object->setSchedule($data['schedule']);
            unset($data['schedule']);
        } elseif (\array_key_exists('schedule', $data) && null === $data['schedule']) {
            $object->setSchedule(null);
        }
        if (\array_key_exists('environment', $data) && null !== $data['environment']) {
            $object->setEnvironment($data['environment']);
            unset($data['environment']);
        } elseif (\array_key_exists('environment', $data) && null === $data['environment']) {
            $object->setEnvironment(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        $data['id'] = $object->getId2();
        $data['owner'] = $object->getOwner();
        $data['workspace'] = $object->getWorkspace();
        $data['organization'] = $object->getOrganization();
        $data['code'] = $object->getCode();
        $data['status'] = $object->getStatus();
        $data['errors'] = $object->getErrors();
        $data['scheduledAt'] = $object->getScheduledAt()->format('Y-m-d\\TH:i:sP');
        if ($object->isInitialized('startedAt') && null !== $object->getStartedAt()) {
            $data['startedAt'] = $object->getStartedAt()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('finishedAt') && null !== $object->getFinishedAt()) {
            $data['finishedAt'] = $object->getFinishedAt()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('interruptedAt') && null !== $object->getInterruptedAt()) {
            $data['interruptedAt'] = $object->getInterruptedAt()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('resumedAt') && null !== $object->getResumedAt()) {
            $data['resumedAt'] = $object->getResumedAt()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('terminatedAt') && null !== $object->getTerminatedAt()) {
            $data['terminatedAt'] = $object->getTerminatedAt()->format('Y-m-d\\TH:i:sP');
        }
        $data['reason'] = $object->getReason();
        if ($object->isInitialized('currentVersion') && null !== $object->getCurrentVersion()) {
            $data['currentVersion'] = $object->getCurrentVersion();
        }
        $data['pipeline'] = $object->getPipeline();
        $data['workflow'] = $object->getWorkflow();
        $data['action'] = $object->getAction();
        if ($object->isInitialized('schedule') && null !== $object->getSchedule()) {
            $data['schedule'] = $object->getSchedule();
        }
        if ($object->isInitialized('environment') && null !== $object->getEnvironment()) {
            $data['environment'] = $object->getEnvironment();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
