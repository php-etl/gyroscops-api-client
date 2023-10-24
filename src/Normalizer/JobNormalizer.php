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

class JobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Gyroscops\\Api\\Model\\Job';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\Job';
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
        $object = new \Gyroscops\Api\Model\Job();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pipeline', $data) && $data['pipeline'] !== null) {
            $value = $data['pipeline'];
            if (is_array($data['pipeline']) and isset($data['pipeline']['steps']) and isset($data['pipeline']['code'])) {
                $value = $this->denormalizer->denormalize($data['pipeline'], 'Gyroscops\\Api\\Model\\Pipeline', 'json', $context);
            }
            $object->setPipeline($value);
            unset($data['pipeline']);
        } elseif (\array_key_exists('pipeline', $data) && $data['pipeline'] === null) {
            $object->setPipeline(null);
        }
        if (\array_key_exists('action', $data) && $data['action'] !== null) {
            $value_1 = $data['action'];
            if (is_array($data['action']) and isset($data['action']['configuration'])) {
                $value_1 = $this->denormalizer->denormalize($data['action'], 'Gyroscops\\Api\\Model\\Action', 'json', $context);
            }
            $object->setAction($value_1);
            unset($data['action']);
        } elseif (\array_key_exists('action', $data) && $data['action'] === null) {
            $object->setAction(null);
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
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if ($object->isInitialized('pipeline') && null !== $object->getPipeline()) {
            $value = $object->getPipeline();
            if (is_object($object->getPipeline())) {
                $value = $this->normalizer->normalize($object->getPipeline(), 'json', $context);
            }
            $data['pipeline'] = $value;
        }
        if ($object->isInitialized('action') && null !== $object->getAction()) {
            $value_1 = $object->getAction();
            if (is_object($object->getAction())) {
                $value_1 = $this->normalizer->normalize($object->getAction(), 'json', $context);
            }
            $data['action'] = $value_1;
        }
        $data['code'] = $object->getCode();
        $data['label'] = $object->getLabel();
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }
}
