<?php

namespace Gyroscops\Api\Normalizer;

use Gyroscops\Api\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ScheduleDeclarePipelineScheduleTimesCommandInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Gyroscops\\Api\\Model\\ScheduleDeclarePipelineScheduleTimesCommandInput' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\ScheduleDeclarePipelineScheduleTimesCommandInput' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleTimesCommandInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pipeline', $data) && null !== $data['pipeline']) {
            $object->setPipeline($data['pipeline']);
        } elseif (\array_key_exists('pipeline', $data) && null === $data['pipeline']) {
            $object->setPipeline(null);
        }
        if (\array_key_exists('start', $data) && null !== $data['start']) {
            $object->setStart(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['start']));
        } elseif (\array_key_exists('start', $data) && null === $data['start']) {
            $object->setStart(null);
        }
        if (\array_key_exists('interval', $data) && null !== $data['interval']) {
            $object->setInterval($data['interval']);
        } elseif (\array_key_exists('interval', $data) && null === $data['interval']) {
            $object->setInterval(null);
        }
        if (\array_key_exists('recurrences', $data) && null !== $data['recurrences']) {
            $object->setRecurrences($data['recurrences']);
        } elseif (\array_key_exists('recurrences', $data) && null === $data['recurrences']) {
            $object->setRecurrences(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getPipeline()) {
            $data['pipeline'] = $object->getPipeline();
        }
        if (null !== $object->getStart()) {
            $data['start'] = $object->getStart()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getInterval()) {
            $data['interval'] = $object->getInterval();
        }
        if (null !== $object->getRecurrences()) {
            $data['recurrences'] = $object->getRecurrences();
        }

        return $data;
    }
}
