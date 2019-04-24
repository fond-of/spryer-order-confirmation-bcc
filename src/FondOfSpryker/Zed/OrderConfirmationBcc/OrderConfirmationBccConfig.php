<?php

namespace FondOfSpryker\Zed\OrderConfirmationBcc;

use FondOfSpryker\Shared\OrderConfirmationBcc\OrderConfirmationBccContants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class OrderConfirmationBccConfig extends AbstractBundleConfig
{
    /**
     * @return array|null
     */
    public function getBccEmailAddress(): ?array
    {
        return $this->get(OrderConfirmationBccContants::BCC_EMAIL_ADDRESS, []);
    }
}
