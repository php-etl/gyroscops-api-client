<?php

namespace Gyroscops\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Gyroscops\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ScheduleDeclarePipelineScheduleTimesCommandInputJsonldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Api\\Model\\ScheduleDeclarePipelineScheduleTimesCommandInputJsonld';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\ScheduleDeclarePipelineScheduleTimesCommandInputJsonld';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleTimesCommandInputJsonld();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@context', $data)) {
            $object->setContext($data['@context']);
        }
        if (\array_key_exists('@id', $data)) {
            $object->setId($data['@id']);
        }
        if (\array_key_exists('@type', $data)) {
            $object->setType($data['@type']);
        }
        if (\array_key_exists('pipeline', $data)) {
            $object->setPipeline($data['pipeline']);
        }
        if (\array_key_exists('start', $data)) {
            $object->setStart(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['start']));
        }
        if (\array_key_exists('interval', $data)) {
            $object->setInterval($data['interval']);
        }
        if (\array_key_exists('recurrences', $data)) {
            $object->setRecurrences($data['recurrences']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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