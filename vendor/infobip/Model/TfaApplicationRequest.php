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

class TfaApplicationRequest
{
    /**
     */
    public function __construct(
        #[Assert\NotBlank]
        protected string $name,
        #[Assert\Valid]
        protected ?\Infobip\Model\TfaApplicationConfiguration $configuration = null,
        protected ?bool $enabled = null,
    ) {

    }


    public function getConfiguration(): \Infobip\Model\TfaApplicationConfiguration|null
    {
        return $this->configuration;
    }

    public function setConfiguration(?\Infobip\Model\TfaApplicationConfiguration $configuration): self
    {
        $this->configuration = $configuration;
        return $this;
    }

    public function getEnabled(): bool|null
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
