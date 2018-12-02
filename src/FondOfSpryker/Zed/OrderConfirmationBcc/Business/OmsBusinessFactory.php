<?php

namespace FondOfSpryker\Zed\OrderConfirmationBcc\Business;

use FondOfSpryker\Zed\OrderConfirmationBcc\Business\Mail\MailHandler;
use FondOfSpryker\Zed\OrderConfirmationBcc\OmsDependencyProvider;
use Spryker\Zed\Oms\Business\OmsBusinessFactory as BaseOmsBusinessFactory;

class OmsBusinessFactory extends BaseOmsBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\OrderConfirmationBcc\Business\Mail\MailHandler
     */
    public function createMailHandler(): MailHandler
    {
        $mailHandler = new MailHandler(
            $this->getSalesFacade(),
            $this->getMailFacade()
        );

        return $mailHandler;
    }

    /**
     * @return mixed|\FondOfSpryker\Zed\OrderConfirmationBcc\Dependency\Facade\OmsToMailInterface
     */
    protected function getMailFacade()
    {
        return $this->getProvidedDependency(OmsDependencyProvider::FACADE_MAIL);
    }
}
