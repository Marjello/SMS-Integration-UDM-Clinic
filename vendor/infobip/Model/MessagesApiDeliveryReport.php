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

class MessagesApiDeliveryReport
{
    /**
     * @param \Infobip\Model\MessagesApiDeliveryResult[] $results
     */
    public function __construct(
        #[Assert\NotBlank]
        protected array $results,
    ) {

    }


    /**
     * @return \Infobip\Model\MessagesApiDeliveryResult[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param \Infobip\Model\MessagesApiDeliveryResult[] $results Incoming Delivery reports.
     */
    public function setResults(array $results): self
    {
        $this->results = $results;
        return $this;
    }
}