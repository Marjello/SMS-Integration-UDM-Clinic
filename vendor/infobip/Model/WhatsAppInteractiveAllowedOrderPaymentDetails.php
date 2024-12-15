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
    "BRAZIL" => "\Infobip\Model\WhatsAppInteractiveOrderBrazilPaymentDetails",
    "BRAZIL_LINK" => "\Infobip\Model\WhatsAppInteractiveOrderBrazilLinkPaymentDetails",
    "BRAZIL_PIX_DC" => "\Infobip\Model\WhatsAppInteractiveOrderBrazilPixDcPaymentDetails",
    "PG_PAYU" => "\Infobip\Model\WhatsAppInteractiveOrderUPIPGPayUPaymentDetails",
    "PG_RAZORPAY" => "\Infobip\Model\WhatsAppInteractiveOrderUPIPGRazorpayPaymentDetails",
    "UPI_PAYU" => "\Infobip\Model\WhatsAppInteractiveOrderUPIPayUPaymentDetails",
])]

class WhatsAppInteractiveAllowedOrderPaymentDetails
{
    /**
     */
    public function __construct(
        #[Assert\NotBlank]
        protected string $type,
    ) {

    }


    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
