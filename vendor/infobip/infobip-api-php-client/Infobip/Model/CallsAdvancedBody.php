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

class CallsAdvancedBody
{
    /**
     * @param \Infobip\Model\CallsAdvancedMessage[] $messages
     */
    public function __construct(
        #[Assert\NotBlank]
        protected array $messages,
        protected ?string $bulkId = null,
    ) {

    }


    public function getBulkId(): string|null
    {
        return $this->bulkId;
    }

    public function setBulkId(?string $bulkId): self
    {
        $this->bulkId = $bulkId;
        return $this;
    }

    /**
     * @return \Infobip\Model\CallsAdvancedMessage[]
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * @param \Infobip\Model\CallsAdvancedMessage[] $messages Array of messages to be sent, one object per every message
     */
    public function setMessages(array $messages): self
    {
        $this->messages = $messages;
        return $this;
    }
}