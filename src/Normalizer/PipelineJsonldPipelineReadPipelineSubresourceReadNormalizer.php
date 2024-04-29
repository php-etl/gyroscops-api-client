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

class PipelineJsonldPipelineReadPipelineSubresourceReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\PipelineJsonldPipelineReadPipelineSubresourceRead' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\PipelineJsonldPipelineReadPipelineSubresourceRead' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\PipelineJsonldPipelineReadPipelineSubresourceRead();
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
        if (\array_key_exists('currentVersion', $data) && null !== $data['currentVersion']) {
            $object->setCurrentVersion($data['currentVersion']);
            unset($data['currentVersion']);
        } elseif (\array_key_exists('currentVersion', $data) && null === $data['currentVersion']) {
            $object->setCurrentVersion(null);
        }
        if (\array_key_exists('isSoftDeleted', $data) && null !== $data['isSoftDeleted']) {
            $object->setIsSoftDeleted($data['isSoftDeleted']);
            unset($data['isSoftDeleted']);
        } elseif (\array_key_exists('isSoftDeleted', $data) && null === $data['isSoftDeleted']) {
            $object->setIsSoftDeleted(null);
        }
        if (\array_key_exists('compiledAt', $data) && null !== $data['compiledAt']) {
            $object->setCompiledAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['compiledAt']));
            unset($data['compiledAt']);
        } elseif (\array_key_exists('compiledAt', $data) && null === $data['compiledAt']) {
            $object->setCompiledAt(null);
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
        if (\array_key_exists('steps', $data) && null !== $data['steps']) {
            $values_4 = [];
            foreach ($data['steps'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setSteps($values_4);
            unset($data['steps']);
        } elseif (\array_key_exists('steps', $data) && null === $data['steps']) {
            $object->setSteps(null);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
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
        if ($object->isInitialized('currentVersion') && null !== $object->getCurrentVersion()) {
            $data['currentVersion'] = $object->getCurrentVersion();
        }
        if ($object->isInitialized('isSoftDeleted') && null !== $object->getIsSoftDeleted()) {
            $data['isSoftDeleted'] = $object->getIsSoftDeleted();
        }
        if ($object->isInitialized('compiledAt') && null !== $object->getCompiledAt()) {
            $data['compiledAt'] = $object->getCompiledAt()->format('Y-m-d\\TH:i:sP');
        }
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
        $data['code'] = $object->getCode();
        $data['label'] = $object->getLabel();
        if ($object->isInitialized('steps') && null !== $object->getSteps()) {
            $values_3 = [];
            foreach ($object->getSteps() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['steps'] = $values_3;
        }
        foreach ($object as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_4;
            }
        }

        return $data;
    }
}
