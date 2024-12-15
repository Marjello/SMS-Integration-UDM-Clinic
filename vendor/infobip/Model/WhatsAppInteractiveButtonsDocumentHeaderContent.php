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

class WhatsAppInteractiveButtonsDocumentHeaderContent extends WhatsAppInteractiveButtonsHeaderContent
{
    public const TYPE = 'DOCUMENT';

    /**
     */
    public function __construct(
        #[Assert\NotBlank]
        #[Assert\Length(max: 2048)]
        #[Assert\Length(min: 1)]
        protected string $mediaUrl,
        #[Assert\Length(max: 240)]
        #[Assert\Length(min: 0)]
        protected ?string $filename = null,
    ) {
        $modelDiscriminatorValue = self::TYPE;

        parent::__construct(
            type: $modelDiscriminatorValue,
        );
    }


    public function getMediaUrl(): string
    {
        return $this->mediaUrl;
    }

    public function setMediaUrl(string $mediaUrl): self
    {
        $this->mediaUrl = $mediaUrl;
        return $this;
    }

    public function getFilename(): string|null
    {
        return $this->filename;
    }

    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;
        return $this;
    }
}