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
class ReferralRequestJsonldReferralRequestReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Api\\Model\\ReferralRequestJsonldReferralRequestRead';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Api\\Model\\ReferralRequestJsonldReferralRequestRead';
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
        $object = new \Gyroscops\Api\Model\ReferralRequestJsonldReferralRequestRead();
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
        if (\array_key_exists('id', $data)) {
            $object->setId2($data['id']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
        }
        if (\array_key_exists('userName', $data)) {
            $object->setUserName($data['userName']);
        }
        if (\array_key_exists('companyName', $data)) {
            $object->setCompanyName($data['companyName']);
        }
        if (\array_key_exists('creationDate', $data)) {
            $object->setCreationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['creationDate']));
        }
        if (\array_key_exists('referralCode', $data) && $data['referralCode'] !== null) {
            $object->setReferralCode($data['referralCode']);
        }
        elseif (\array_key_exists('referralCode', $data) && $data['referralCode'] === null) {
            $object->setReferralCode(null);
        }
        if (\array_key_exists('approver', $data) && $data['approver'] !== null) {
            $object->setApprover($data['approver']);
        }
        elseif (\array_key_exists('approver', $data) && $data['approver'] === null) {
            $object->setApprover(null);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['email'] = $object->getEmail();
        $data['firstName'] = $object->getFirstName();
        $data['lastName'] = $object->getLastName();
        $data['userName'] = $object->getUserName();
        $data['companyName'] = $object->getCompanyName();
        if (null !== $object->getCreationDate()) {
            $data['creationDate'] = $object->getCreationDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getReferralCode()) {
            $data['referralCode'] = $object->getReferralCode();
        }
        if (null !== $object->getApprover()) {
            $data['approver'] = $object->getApprover();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        return $data;
    }
}