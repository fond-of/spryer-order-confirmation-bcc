<?php

declare(strict_types = 1);

namespace FondOfSpryker\Zed\OrderConfirmationBcc;

use FondOfSpryker\Shared\OrderConfirmationBcc\OrderConfirmationBccContants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class OrderConfirmationBccConfig extends AbstractBundleConfig
{
    /**
     * @return string[]
     */
    public function getBccEmailAddress(): array
    {
        return $this->get(OrderConfirmationBccContants::BCC_EMAIL_ADDRESS, []);
    }
}
