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
        return 'Gyroscops\\Api\\Model\\ReferralRequestJsonldReferralRequestRead' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Gyroscops\\Api\\Model\\ReferralRequestJsonldReferralRequestRead' === get_class($data);
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
        $object = new \Gyroscops\Api\Model\ReferralRequestJsonldReferralRequestRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@context', $data) && null !== $data['@context']) {
            $object->setContext($data['@context']);
        } elseif (\array_key_exists('@context', $data) && null === $data['@context']) {
            $object->setContext(null);
        }
        if (\array_key_exists('@id', $data) && null !== $data['@id']) {
            $object->setId($data['@id']);
        } elseif (\array_key_exists('@id', $data) && null === $data['@id']) {
            $object->setId(null);
        }
        if (\array_key_exists('@type', $data) && null !== $data['@type']) {
            $object->setType($data['@type']);
        } elseif (\array_key_exists('@type', $data) && null === $data['@type']) {
            $object->setType(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId2($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId2(null);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('firstName', $data) && null !== $data['firstName']) {
            $object->setFirstName($data['firstName']);
        } elseif (\array_key_exists('firstName', $data) && null === $data['firstName']) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('lastName', $data) && null !== $data['lastName']) {
            $object->setLastName($data['lastName']);
        } elseif (\array_key_exists('lastName', $data) && null === $data['lastName']) {
            $object->setLastName(null);
        }
        if (\array_key_exists('userName', $data) && null !== $data['userName']) {
            $object->setUserName($data['userName']);
        } elseif (\array_key_exists('userName', $data) && null === $data['userName']) {
            $object->setUserName(null);
        }
        if (\array_key_exists('companyName', $data) && null !== $data['companyName']) {
            $object->setCompanyName($data['companyName']);
        } elseif (\array_key_exists('companyName', $data) && null === $data['companyName']) {
            $object->setCompanyName(null);
        }
        if (\array_key_exists('creationDate', $data) && null !== $data['creationDate']) {
            $object->setCreationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['creationDate']));
        } elseif (\array_key_exists('creationDate', $data) && null === $data['creationDate']) {
            $object->setCreationDate(null);
        }
        if (\array_key_exists('referralCode', $data) && null !== $data['referralCode']) {
            $object->setReferralCode($data['referralCode']);
        } elseif (\array_key_exists('referralCode', $data) && null === $data['referralCode']) {
            $object->setReferralCode(null);
        }
        if (\array_key_exists('approver', $data) && null !== $data['approver']) {
            $object->setApprover($data['approver']);
        } elseif (\array_key_exists('approver', $data) && null === $data['approver']) {
            $object->setApprover(null);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
