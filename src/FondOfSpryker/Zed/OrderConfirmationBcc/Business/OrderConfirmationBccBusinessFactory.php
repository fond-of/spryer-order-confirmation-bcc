<?php

declare(strict_types = 1);

namespace FondOfSpryker\Zed\OrderConfirmationBcc\Business;

use FondOfSpryker\Zed\OrderConfirmationBcc\Business\Mail\MailHandler;
use FondOfSpryker\Zed\OrderConfirmationBcc\Business\Mail\MailHandlerInterface;
use FondOfSpryker\Zed\OrderConfirmationBcc\OrderConfirmationBccConfig;
use Spryker\Zed\Oms\Business\OmsBusinessFactory as SprykerOmsBusinessFactory;

/**
 * @method OrderConfirmationBccConfig getConfig()
 */
class OrderConfirmationBccBusinessFactory extends SprykerOmsBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\OrderConfirmationBcc\Business\Mail\MailHandlerInterface
     */
    public function createMailHandler(): MailHandlerInterface
    {
        return new MailHandler(
            $this->getSalesFacade(),
            $this->getMailFacade()
        );
    }
}
