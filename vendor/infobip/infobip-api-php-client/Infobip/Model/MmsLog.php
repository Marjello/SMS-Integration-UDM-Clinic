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

class MmsLog
{
    /**
     */
    public function __construct(
        protected ?string $title = null,
        protected ?string $mccMnc = null,
        protected ?string $sender = null,
        protected ?string $destination = null,
        protected ?string $bulkId = null,
        protected ?string $messageId = null,
        #[Serializer\Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d\TH:i:s.vP'])]
        protected ?\DateTime $sentAt = null,
        #[Serializer\Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d\TH:i:s.vP'])]
        protected ?\DateTime $doneAt = null,
        protected ?int $messageCount = null,
        #[Assert\Valid]
        protected ?\Infobip\Model\MessagePrice $price = null,
        #[Assert\Valid]
        protected ?\Infobip\Model\MessageStatus $status = null,
        #[Assert\Valid]
        protected ?\Infobip\Model\MessageError $error = null,
        #[Assert\Valid]
        protected ?\Infobip\Model\Platform $platform = null,
        #[Assert\Valid]
        protected ?\Infobip\Model\MmsOutboundContent $content = null,
        protected ?string $campaignReferenceId = null,
    ) {

    }


    public function getTitle(): string|null
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getMccMnc(): string|null
    {
        return $this->mccMnc;
    }

    public function setMccMnc(?string $mccMnc): self
    {
        $this->mccMnc = $mccMnc;
        return $this;
    }

    public function getSender(): string|null
    {
        return $this->sender;
    }

    public function setSender(?string $sender): self
    {
        $this->sender = $sender;
        return $this;
    }

    public function getDestination(): string|null
    {
        return $this->destination;
    }

    public function setDestination(?string $destination): self
    {
        $this->destination = $destination;
        return $this;
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

    public function getMessageId(): string|null
    {
        return $this->messageId;
    }

    public function setMessageId(?string $messageId): self
    {
        $this->messageId = $messageId;
        return $this;
    }

    public function getSentAt(): \DateTime|null
    {
        return $this->sentAt;
    }

    public function setSentAt(?\DateTime $sentAt): self
    {
        $this->sentAt = $sentAt;
        return $this;
    }

    public function getDoneAt(): \DateTime|null
    {
        return $this->doneAt;
    }

    public function setDoneAt(?\DateTime $doneAt): self
    {
        $this->doneAt = $doneAt;
        return $this;
    }

    public function getMessageCount(): int|null
    {
        return $this->messageCount;
    }

    public function setMessageCount(?int $messageCount): self
    {
        $this->messageCount = $messageCount;
        return $this;
    }

    public function getPrice(): \Infobip\Model\MessagePrice|null
    {
        return $this->price;
    }

    public function setPrice(?\Infobip\Model\MessagePrice $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function getStatus(): \Infobip\Model\MessageStatus|null
    {
        return $this->status;
    }

    public function setStatus(?\Infobip\Model\MessageStatus $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getError(): \Infobip\Model\MessageError|null
    {
        return $this->error;
    }

    public function setError(?\Infobip\Model\MessageError $error): self
    {
        $this->error = $error;
        return $this;
    }

    public function getPlatform(): \Infobip\Model\Platform|null
    {
        return $this->platform;
    }

    public function setPlatform(?\Infobip\Model\Platform $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    public function getContent(): \Infobip\Model\MmsOutboundContent|null
    {
        return $this->content;
    }

    public function setContent(?\Infobip\Model\MmsOutboundContent $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getCampaignReferenceId(): string|null
    {
        return $this->campaignReferenceId;
    }

    public function setCampaignReferenceId(?string $campaignReferenceId): self
    {
        $this->campaignReferenceId = $campaignReferenceId;
        return $this;
    }
}