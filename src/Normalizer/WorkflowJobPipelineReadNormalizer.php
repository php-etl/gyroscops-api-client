<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Normalizer;

use Gyroscops\Api\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class WorkflowJobPipelineReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === \Gyroscops\Api\Model\WorkflowJobPipelineRead::class;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data::class === \Gyroscops\Api\Model\WorkflowJobPipelineRead::class;
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
        $object = new \Gyroscops\Api\Model\WorkflowJobPipelineRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('label', $data) && $data['label'] !== null) {
            $object->setLabel($data['label']);
        } elseif (\array_key_exists('label', $data) && $data['label'] === null) {
            $object->setLabel(null);
        }
        if (\array_key_exists('runtimeType', $data) && $data['runtimeType'] !== null) {
            $object->setRuntimeType($data['runtimeType']);
        } elseif (\array_key_exists('runtimeType', $data) && $data['runtimeType'] === null) {
            $object->setRuntimeType(null);
        }
        if (\array_key_exists('runtime', $data) && $data['runtime'] !== null) {
            $values = [];
            foreach ($data['runtime'] as $value) {
                $values[] = $value;
            }
            $object->setRuntime($values);
        } elseif (\array_key_exists('runtime', $data) && $data['runtime'] === null) {
            $object->setRuntime(null);
        }
        if (\array_key_exists('autoload', $data) && $data['autoload'] !== null) {
            $values_1 = [];
            foreach ($data['autoload'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAutoload($values_1);
        } elseif (\array_key_exists('autoload', $data) && $data['autoload'] === null) {
            $object->setAutoload(null);
        }
        if (\array_key_exists('packages', $data) && $data['packages'] !== null) {
            $values_2 = [];
            foreach ($data['packages'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setPackages($values_2);
        } elseif (\array_key_exists('packages', $data) && $data['packages'] === null) {
            $object->setPackages(null);
        }
        if (\array_key_exists('repositories', $data) && $data['repositories'] !== null) {
            $values_3 = [];
            foreach ($data['repositories'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setRepositories($values_3);
        } elseif (\array_key_exists('repositories', $data) && $data['repositories'] === null) {
            $object->setRepositories(null);
        }
        if (\array_key_exists('auths', $data) && $data['auths'] !== null) {
            $values_4 = [];
            foreach ($data['auths'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setAuths($values_4);
        } elseif (\array_key_exists('auths', $data) && $data['auths'] === null) {
            $object->setAuths(null);
        }
        if (\array_key_exists('steps', $data) && $data['steps'] !== null) {
            $values_5 = [];
            foreach ($data['steps'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setSteps($values_5);
        } elseif (\array_key_exists('steps', $data) && $data['steps'] === null) {
            $object->setSteps(null);
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
        $data['code'] = $object->getCode();
        $data['label'] = $object->getLabel();
        $data['runtimeType'] = $object->getRuntimeType();
        if (null !== $object->getRuntime()) {
            $values = [];
            foreach ($object->getRuntime() as $value) {
                $values[] = $value;
            }
            $data['runtime'] = $values;
        }
        if (null !== $object->getPackages()) {
            $values_1 = [];
            foreach ($object->getPackages() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['packages'] = $values_1;
        }
        $values_2 = [];
        foreach ($object->getRepositories() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['repositories'] = $values_2;
        $values_3 = [];
        foreach ($object->getAuths() as $value_3) {
            $values_3[] = $value_3;
        }
        $data['auths'] = $values_3;
        if (null !== $object->getSteps()) {
            $values_4 = [];
            foreach ($object->getSteps() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['steps'] = $values_4;
        }

        return $data;
    }
}
