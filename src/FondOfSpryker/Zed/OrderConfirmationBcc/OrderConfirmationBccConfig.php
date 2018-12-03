<?php

namespace FondOfSpryker\Zed\OrderConfirmationBcc;

use FondOfSpryker\Shared\OrderConfirmationBcc\OrderConfirmationBccContants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class OrderConfirmationBccConfig extends AbstractBundleConfig
{
    public function getBccEmailAddress(): ?string
    {
        return $this->get(OrderConfirmationBccContants::BCC_EMAIL_ADDRESS, null);
    }
}
