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
use Symfony\Component\Serializer\Annotation\DiscriminatorMap;

#[DiscriminatorMap(typeProperty: "type", mapping: [
    "AUDIO" => "\Infobip\Model\MessagesApiWebhookEventAudioContent",
    "AUTHENTICATION_RESPONSE" => "\Infobip\Model\MessagesApiWebhookEventAuthenticationResponseContent",
    "BUTTON_REPLY" => "\Infobip\Model\MessagesApiWebhookEventButtonReplyContent",
    "DOCUMENT" => "\Infobip\Model\MessagesApiWebhookEventDocumentContent",
    "FILE" => "\Infobip\Model\MessagesApiWebhookEventFileContent",
    "IMAGE" => "\Infobip\Model\MessagesApiWebhookEventImageContent",
    "LIST_REPLY" => "\Infobip\Model\MessagesApiWebhookEventListReplyContent",
    "LOCATION" => "\Infobip\Model\MessagesApiWebhookEventLocationContent",
    "SUBJECT" => "\Infobip\Model\MessagesApiWebhookEventSubjectContent",
    "TEXT" => "\Infobip\Model\MessagesApiWebhookEventTextContent",
    "VIDEO" => "\Infobip\Model\MessagesApiWebhookEventVideoContent",
])]

class MessagesApiWebhookEventContent
{
    /**
     */
    public function __construct(
        #[Assert\NotBlank]
        protected string $type,
    ) {

    }


    public function getType(): mixed
    {
        return $this->type;
    }

    public function setType($type): self
    {
        $this->type = $type;
        return $this;
    }
}
