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

class WorkflowWorkflowReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\WorkflowWorkflowRead' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\WorkflowWorkflowRead' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\WorkflowWorkflowRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('isSoftDeleted', $data) && null !== $data['isSoftDeleted']) {
            $object->setIsSoftDeleted($data['isSoftDeleted']);
            unset($data['isSoftDeleted']);
        } elseif (\array_key_exists('isSoftDeleted', $data) && null === $data['isSoftDeleted']) {
            $object->setIsSoftDeleted(null);
        }
        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
            unset($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }
        if (\array_key_exists('label', $data) && null !== $data['label']) {
            $object->setLabel($data['label']);
            unset($data['label']);
        } elseif (\array_key_exists('label', $data) && null === $data['label']) {
            $object->setLabel(null);
        }
        if (\array_key_exists('autoload', $data) && null !== $data['autoload']) {
            $values = [];
            foreach ($data['autoload'] as $value) {
                $values[] = $value;
            }
            $object->setAutoload($values);
            unset($data['autoload']);
        } elseif (\array_key_exists('autoload', $data) && null === $data['autoload']) {
            $object->setAutoload(null);
        }
        if (\array_key_exists('packages', $data) && null !== $data['packages']) {
            $values_1 = [];
            foreach ($data['packages'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPackages($values_1);
            unset($data['packages']);
        } elseif (\array_key_exists('packages', $data) && null === $data['packages']) {
            $object->setPackages(null);
        }
        if (\array_key_exists('repositories', $data) && null !== $data['repositories']) {
            $values_2 = [];
            foreach ($data['repositories'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRepositories($values_2);
            unset($data['repositories']);
        } elseif (\array_key_exists('repositories', $data) && null === $data['repositories']) {
            $object->setRepositories(null);
        }
        if (\array_key_exists('auths', $data) && null !== $data['auths']) {
            $values_3 = [];
            foreach ($data['auths'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setAuths($values_3);
            unset($data['auths']);
        } elseif (\array_key_exists('auths', $data) && null === $data['auths']) {
            $object->setAuths(null);
        }
        if (\array_key_exists('compiledAt', $data) && null !== $data['compiledAt']) {
            $object->setCompiledAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['compiledAt']));
            unset($data['compiledAt']);
        } elseif (\array_key_exists('compiledAt', $data) && null === $data['compiledAt']) {
            $object->setCompiledAt(null);
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
        if (\array_key_exists('currentVersion', $data) && null !== $data['currentVersion']) {
            $object->setCurrentVersion($data['currentVersion']);
            unset($data['currentVersion']);
        } elseif (\array_key_exists('currentVersion', $data) && null === $data['currentVersion']) {
            $object->setCurrentVersion(null);
        }
        if (\array_key_exists('jobs', $data) && null !== $data['jobs']) {
            $values_4 = [];
            foreach ($data['jobs'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setJobs($values_4);
            unset($data['jobs']);
        } elseif (\array_key_exists('jobs', $data) && null === $data['jobs']) {
            $object->setJobs(null);
        }
        if (\array_key_exists('templatePictograms', $data) && null !== $data['templatePictograms']) {
            $values_5 = [];
            foreach ($data['templatePictograms'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setTemplatePictograms($values_5);
            unset($data['templatePictograms']);
        } elseif (\array_key_exists('templatePictograms', $data) && null === $data['templatePictograms']) {
            $object->setTemplatePictograms(null);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
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
        if ($object->isInitialized('isSoftDeleted') && null !== $object->getIsSoftDeleted()) {
            $data['isSoftDeleted'] = $object->getIsSoftDeleted();
        }
        $data['code'] = $object->getCode();
        $data['label'] = $object->getLabel();
        if ($object->isInitialized('packages') && null !== $object->getPackages()) {
            $values = [];
            foreach ($object->getPackages() as $value) {
                $values[] = $value;
            }
            $data['packages'] = $values;
        }
        $values_1 = [];
        foreach ($object->getRepositories() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['repositories'] = $values_1;
        $values_2 = [];
        foreach ($object->getAuths() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['auths'] = $values_2;
        if ($object->isInitialized('compiledAt') && null !== $object->getCompiledAt()) {
            $data['compiledAt'] = $object->getCompiledAt()->format('Y-m-d\\TH:i:sP');
        }
        $data['owner'] = $object->getOwner();
        $data['workspace'] = $object->getWorkspace();
        $data['organization'] = $object->getOrganization();
        if ($object->isInitialized('currentVersion') && null !== $object->getCurrentVersion()) {
            $data['currentVersion'] = $object->getCurrentVersion();
        }
        if ($object->isInitialized('jobs') && null !== $object->getJobs()) {
            $values_3 = [];
            foreach ($object->getJobs() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['jobs'] = $values_3;
        }
        if ($object->isInitialized('templatePictograms') && null !== $object->getTemplatePictograms()) {
            $values_4 = [];
            foreach ($object->getTemplatePictograms() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['templatePictograms'] = $values_4;
        }
        foreach ($object as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_5;
            }
        }

        return $data;
    }
}
