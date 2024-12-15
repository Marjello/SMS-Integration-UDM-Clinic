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


class ApiErrorViolation
{
    /**
     */
    public function __construct(
        protected ?string $property = null,
        protected ?string $violation = null,
    ) {

    }


    public function getProperty(): string|null
    {
        return $this->property;
    }

    public function setProperty(?string $property): self
    {
        $this->property = $property;
        return $this;
    }

    public function getViolation(): string|null
    {
        return $this->violation;
    }

    public function setViolation(?string $violation): self
    {
        $this->violation = $violation;
        return $this;
    }
}