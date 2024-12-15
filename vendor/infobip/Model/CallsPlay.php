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

class CallsPlay implements CallsScriptOneOf
{
    /**
     */
    public function __construct(
        #[Assert\NotBlank]
        protected string $playFromUrl,
        protected ?int $actionId = null,
    ) {

    }


    public function getPlayFromUrl(): string
    {
        return $this->playFromUrl;
    }

    public function setPlayFromUrl(string $playFromUrl): self
    {
        $this->playFromUrl = $playFromUrl;
        return $this;
    }

    public function getActionId(): int|null
    {
        return $this->actionId;
    }

    public function setActionId(?int $actionId): self
    {
        $this->actionId = $actionId;
        return $this;
    }
}