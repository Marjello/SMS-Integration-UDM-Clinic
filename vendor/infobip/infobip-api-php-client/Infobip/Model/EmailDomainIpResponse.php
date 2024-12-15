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

class EmailDomainIpResponse
{
    /**
     * @param \Infobip\Model\EmailDomainIp[] $result
     */
    public function __construct(
        #[Assert\NotBlank]
        protected array $result,
    ) {

    }


    /**
     * @return \Infobip\Model\EmailDomainIp[]
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param \Infobip\Model\EmailDomainIp[] $result List of ip details.
     */
    public function setResult(array $result): self
    {
        $this->result = $result;
        return $this;
    }
}