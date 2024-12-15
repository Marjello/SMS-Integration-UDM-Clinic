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


class CallRate
{
    /**
     */
    public function __construct(
        protected ?int $maxCalls = null,
        protected ?string $timeUnit = null,
    ) {

    }


    public function getMaxCalls(): int|null
    {
        return $this->maxCalls;
    }

    public function setMaxCalls(?int $maxCalls): self
    {
        $this->maxCalls = $maxCalls;
        return $this;
    }

    public function getTimeUnit(): mixed
    {
        return $this->timeUnit;
    }

    public function setTimeUnit($timeUnit): self
    {
        $this->timeUnit = $timeUnit;
        return $this;
    }
}