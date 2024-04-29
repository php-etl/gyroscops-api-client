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

class TemplateTemplateListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\TemplateTemplateList' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\TemplateTemplateList' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\TemplateTemplateList();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('organization', $data) && null !== $data['organization']) {
            $object->setOrganization($data['organization']);
            unset($data['organization']);
        } elseif (\array_key_exists('organization', $data) && null === $data['organization']) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('keywords', $data) && null !== $data['keywords']) {
            $values = [];
            foreach ($data['keywords'] as $value) {
                $values[] = $value;
            }
            $object->setKeywords($values);
            unset($data['keywords']);
        } elseif (\array_key_exists('keywords', $data) && null === $data['keywords']) {
            $object->setKeywords(null);
        }
        if (\array_key_exists('pictograms', $data) && null !== $data['pictograms']) {
            $values_1 = [];
            foreach ($data['pictograms'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPictograms($values_1);
            unset($data['pictograms']);
        } elseif (\array_key_exists('pictograms', $data) && null === $data['pictograms']) {
            $object->setPictograms(null);
        }
        if (\array_key_exists('template', $data) && null !== $data['template']) {
            $values_2 = [];
            foreach ($data['template'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTemplate($values_2);
            unset($data['template']);
        } elseif (\array_key_exists('template', $data) && null === $data['template']) {
            $object->setTemplate(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        $data['code'] = $object->getCode();
        $data['label'] = $object->getLabel();
        $data['description'] = $object->getDescription();
        $data['organization'] = $object->getOrganization();
        if ($object->isInitialized('keywords') && null !== $object->getKeywords()) {
            $values = [];
            foreach ($object->getKeywords() as $value) {
                $values[] = $value;
            }
            $data['keywords'] = $values;
        }
        if ($object->isInitialized('pictograms') && null !== $object->getPictograms()) {
            $values_1 = [];
            foreach ($object->getPictograms() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['pictograms'] = $values_1;
        }
        if ($object->isInitialized('template') && null !== $object->getTemplate()) {
            $values_2 = [];
            foreach ($object->getTemplate() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['template'] = $values_2;
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }

        return $data;
    }
}
