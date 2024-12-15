<?php

declare(strict_types=1);

/**
 * Infobip Client API Libraries OpenAPI Specification
 *
 * OpenAPI specification containing public endpoints supported in client API libraries.
 *
 * Contact: support@infobip.com
 *
 * This class is auto generated from the Infobip OpenAPI specification through the OpenAPI Specification Client API libraries (Re)Generator (OSCAR), powered by the OpenAPI Generator (https://openapi-generator.tech).
 *
 * Do not edit manually. To learn how to raise an issue, see the CONTRIBUTING guide or contact us @ support@infobip.com.
 */

namespace Infobip\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation as Serializer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

class CallsSchedulingOptions
{
    /**
     */
    public function __construct(
        #[Serializer\Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d\TH:i:s.vP'])]
        protected ?\DateTime $startTime = null,
        #[Assert\Valid]
        protected ?\Infobip\Model\DeliveryTimeWindow $callingTimeWindow = null,
    ) {

    }


    public function getStartTime(): \DateTime|null
    {
        return $this->startTime;
    }

    public function setStartTime(?\DateTime $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function getCallingTimeWindow(): \Infobip\Model\DeliveryTimeWindow|null
    {
        return $this->callingTimeWindow;
    }

    public function setCallingTimeWindow(?\Infobip\Model\DeliveryTimeWindow $callingTimeWindow): self
    {
        $this->callingTimeWindow = $callingTimeWindow;
        return $this;
    }
}