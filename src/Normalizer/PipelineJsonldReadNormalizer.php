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

class PipelineJsonldReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Gyroscops\\Api\\Model\\PipelineJsonldRead';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\PipelineJsonldRead';
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
        $object = new \Gyroscops\Api\Model\PipelineJsonldRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@id', $data) && $data['@id'] !== null) {
            $object->setId($data['@id']);
            unset($data['@id']);
        } elseif (\array_key_exists('@id', $data) && $data['@id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('@type', $data) && $data['@type'] !== null) {
            $object->setType($data['@type']);
            unset($data['@type']);
        } elseif (\array_key_exists('@type', $data) && $data['@type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('@context', $data) && $data['@context'] !== null) {
            $object->setContext($data['@context']);
            unset($data['@context']);
        } elseif (\array_key_exists('@context', $data) && $data['@context'] === null) {
            $object->setContext(null);
        }
        if (\array_key_exists('currentVersion', $data) && $data['currentVersion'] !== null) {
            $object->setCurrentVersion($data['currentVersion']);
            unset($data['currentVersion']);
        } elseif (\array_key_exists('currentVersion', $data) && $data['currentVersion'] === null) {
            $object->setCurrentVersion(null);
        }
        if (\array_key_exists('isSoftDeleted', $data) && $data['isSoftDeleted'] !== null) {
            $object->setIsSoftDeleted($data['isSoftDeleted']);
            unset($data['isSoftDeleted']);
        } elseif (\array_key_exists('isSoftDeleted', $data) && $data['isSoftDeleted'] === null) {
            $object->setIsSoftDeleted(null);
        }
        if (\array_key_exists('compiledAt', $data) && $data['compiledAt'] !== null) {
            $object->setCompiledAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['compiledAt']));
            unset($data['compiledAt']);
        } elseif (\array_key_exists('compiledAt', $data) && $data['compiledAt'] === null) {
            $object->setCompiledAt(null);
        }
        if (\array_key_exists('autoload', $data) && $data['autoload'] !== null) {
            $values = [];
            foreach ($data['autoload'] as $value) {
                $values[] = $value;
            }
            $object->setAutoload($values);
            unset($data['autoload']);
        } elseif (\array_key_exists('autoload', $data) && $data['autoload'] === null) {
            $object->setAutoload(null);
        }
        if (\array_key_exists('packages', $data) && $data['packages'] !== null) {
            $values_1 = [];
            foreach ($data['packages'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPackages($values_1);
            unset($data['packages']);
        } elseif (\array_key_exists('packages', $data) && $data['packages'] === null) {
            $object->setPackages(null);
        }
        if (\array_key_exists('repositories', $data) && $data['repositories'] !== null) {
            $values_2 = [];
            foreach ($data['repositories'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRepositories($values_2);
            unset($data['repositories']);
        } elseif (\array_key_exists('repositories', $data) && $data['repositories'] === null) {
            $object->setRepositories(null);
        }
        if (\array_key_exists('auths', $data) && $data['auths'] !== null) {
            $values_3 = [];
            foreach ($data['auths'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setAuths($values_3);
            unset($data['auths']);
        } elseif (\array_key_exists('auths', $data) && $data['auths'] === null) {
            $object->setAuths(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId2($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId2(null);
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
            unset($data['code']);
        } elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('label', $data) && $data['label'] !== null) {
            $object->setLabel($data['label']);
            unset($data['label']);
        } elseif (\array_key_exists('label', $data) && $data['label'] === null) {
            $object->setLabel(null);
        }
        if (\array_key_exists('runtime', $data) && $data['runtime'] !== null) {
            $values_4 = [];
            foreach ($data['runtime'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setRuntime($values_4);
            unset($data['runtime']);
        } elseif (\array_key_exists('runtime', $data) && $data['runtime'] === null) {
            $object->setRuntime(null);
        }
        if (\array_key_exists('steps', $data) && $data['steps'] !== null) {
            $values_5 = [];
            foreach ($data['steps'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Gyroscops\\Api\\Model\\PipelineStepJsonldRead', 'json', $context);
            }
            $object->setSteps($values_5);
            unset($data['steps']);
        } elseif (\array_key_exists('steps', $data) && $data['steps'] === null) {
            $object->setSteps(null);
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
        $data['id'] = $object->getId2();
        $data['code'] = $object->getCode();
        $data['label'] = $object->getLabel();
        if ($object->isInitialized('runtime') && null !== $object->getRuntime()) {
            $values_3 = [];
            foreach ($object->getRuntime() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['runtime'] = $values_3;
        }
        if ($object->isInitialized('steps') && null !== $object->getSteps()) {
            $values_4 = [];
            foreach ($object->getSteps() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['steps'] = $values_4;
        }
        foreach ($object as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_5;
            }
        }

        return $data;
    }
}
