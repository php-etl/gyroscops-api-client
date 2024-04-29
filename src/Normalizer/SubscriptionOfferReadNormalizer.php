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

class SubscriptionOfferReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\SubscriptionOfferRead' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\SubscriptionOfferRead' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\SubscriptionOfferRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('color', $data) && null !== $data['color']) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['color'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setColor($values);
            unset($data['color']);
        } elseif (\array_key_exists('color', $data) && null === $data['color']) {
            $object->setColor(null);
        }
        if (\array_key_exists('colorDepth', $data) && null !== $data['colorDepth']) {
            $object->setColorDepth($data['colorDepth']);
            unset($data['colorDepth']);
        } elseif (\array_key_exists('colorDepth', $data) && null === $data['colorDepth']) {
            $object->setColorDepth(null);
        }
        if (\array_key_exists('sku', $data) && null !== $data['sku']) {
            $object->setSku($data['sku']);
            unset($data['sku']);
        } elseif (\array_key_exists('sku', $data) && null === $data['sku']) {
            $object->setSku(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('slug', $data) && null !== $data['slug']) {
            $object->setSlug($data['slug']);
            unset($data['slug']);
        } elseif (\array_key_exists('slug', $data) && null === $data['slug']) {
            $object->setSlug(null);
        }
        if (\array_key_exists('shortDescription', $data) && null !== $data['shortDescription']) {
            $object->setShortDescription($data['shortDescription']);
            unset($data['shortDescription']);
        } elseif (\array_key_exists('shortDescription', $data) && null === $data['shortDescription']) {
            $object->setShortDescription(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('features', $data) && null !== $data['features']) {
            $values_1 = [];
            foreach ($data['features'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFeatures($values_1);
            unset($data['features']);
        } elseif (\array_key_exists('features', $data) && null === $data['features']) {
            $object->setFeatures(null);
        }
        if (\array_key_exists('priceList', $data) && null !== $data['priceList']) {
            $values_2 = [];
            foreach ($data['priceList'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Gyroscops\\Api\\Model\\BuyablePriceRead', 'json', $context);
            }
            $object->setPriceList($values_2);
            unset($data['priceList']);
        } elseif (\array_key_exists('priceList', $data) && null === $data['priceList']) {
            $object->setPriceList(null);
        }
        if (\array_key_exists('rank', $data) && null !== $data['rank']) {
            $object->setRank($data['rank']);
            unset($data['rank']);
        } elseif (\array_key_exists('rank', $data) && null === $data['rank']) {
            $object->setRank(null);
        }
        if (\array_key_exists('active', $data) && null !== $data['active']) {
            $object->setActive($data['active']);
            unset($data['active']);
        } elseif (\array_key_exists('active', $data) && null === $data['active']) {
            $object->setActive(null);
        }
        if (\array_key_exists('activeFrom', $data) && null !== $data['activeFrom']) {
            $object->setActiveFrom(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['activeFrom']));
            unset($data['activeFrom']);
        } elseif (\array_key_exists('activeFrom', $data) && null === $data['activeFrom']) {
            $object->setActiveFrom(null);
        }
        if (\array_key_exists('activeUntil', $data) && null !== $data['activeUntil']) {
            $object->setActiveUntil(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['activeUntil']));
            unset($data['activeUntil']);
        } elseif (\array_key_exists('activeUntil', $data) && null === $data['activeUntil']) {
            $object->setActiveUntil(null);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
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
        $values = [];
        foreach ($object->getColor() as $key => $value) {
            $values[$key] = $value;
        }
        $data['color'] = $values;
        if ($object->isInitialized('colorDepth') && null !== $object->getColorDepth()) {
            $data['colorDepth'] = $object->getColorDepth();
        }
        $data['sku'] = $object->getSku();
        $data['name'] = $object->getName();
        $data['slug'] = $object->getSlug();
        $data['shortDescription'] = $object->getShortDescription();
        $data['description'] = $object->getDescription();
        $values_1 = [];
        foreach ($object->getFeatures() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['features'] = $values_1;
        if ($object->isInitialized('priceList') && null !== $object->getPriceList()) {
            $values_2 = [];
            foreach ($object->getPriceList() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['priceList'] = $values_2;
        }
        if ($object->isInitialized('rank') && null !== $object->getRank()) {
            $data['rank'] = $object->getRank();
        }
        if ($object->isInitialized('active') && null !== $object->getActive()) {
            $data['active'] = $object->getActive();
        }
        if ($object->isInitialized('activeFrom') && null !== $object->getActiveFrom()) {
            $data['activeFrom'] = $object->getActiveFrom()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('activeUntil') && null !== $object->getActiveUntil()) {
            $data['activeUntil'] = $object->getActiveUntil()->format('Y-m-d\\TH:i:sP');
        }
        foreach ($object as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_3;
            }
        }

        return $data;
    }
}
