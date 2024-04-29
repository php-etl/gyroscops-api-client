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

class OptionJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Gyroscops\\Api\\Model\\OptionJsonld' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Gyroscops\\Api\\Model\\OptionJsonld' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\OptionJsonld();
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
        if (\array_key_exists('offer', $data) && null !== $data['offer']) {
            $object->setOffer($data['offer']);
            unset($data['offer']);
        } elseif (\array_key_exists('offer', $data) && null === $data['offer']) {
            $object->setOffer(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId2($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId2(null);
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
            $values = [];
            foreach ($data['features'] as $value) {
                $values[] = $value;
            }
            $object->setFeatures($values);
            unset($data['features']);
        } elseif (\array_key_exists('features', $data) && null === $data['features']) {
            $object->setFeatures(null);
        }
        if (\array_key_exists('priceList', $data) && null !== $data['priceList']) {
            $values_1 = [];
            foreach ($data['priceList'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Gyroscops\\Api\\Model\\BuyablePriceJsonld', 'json', $context);
            }
            $object->setPriceList($values_1);
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
        $data['offer'] = $object->getOffer();
        $data['sku'] = $object->getSku();
        $data['name'] = $object->getName();
        $data['slug'] = $object->getSlug();
        $data['shortDescription'] = $object->getShortDescription();
        $data['description'] = $object->getDescription();
        $values = [];
        foreach ($object->getFeatures() as $value) {
            $values[] = $value;
        }
        $data['features'] = $values;
        if ($object->isInitialized('priceList') && null !== $object->getPriceList()) {
            $values_1 = [];
            foreach ($object->getPriceList() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['priceList'] = $values_1;
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
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }
}
