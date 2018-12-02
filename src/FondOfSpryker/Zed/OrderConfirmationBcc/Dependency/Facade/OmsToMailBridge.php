<?php

namespace FondOfSpryker\Zed\OrderConfirmationBcc\Dependency\Facade;

use Generated\Shared\Transfer\MailTransfer;
use Spryker\Zed\Oms\Dependency\Facade\OmsToMailBridge as BaseOmsToMailBridge;

class OmsToMailBridge extends BaseOmsToMailBridge implements OmsToMailInterface
{
    /**
     * @param \Pyz\Zed\Mail\Business\MailFacadeInterface $mailFacade
     */
    public function __construct($mailFacade)
    {
        $this->mailFacade = $mailFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\MailTransfer $mailTransfer
     * @param string|null $bcc
     *
     * @return mixed|void
     */
    public function handleMailWithBcc(MailTransfer $mailTransfer, ?string $bcc)
    {
        $this->mailFacade->handleMailWithBcc($mailTransfer, $bcc);
    }
}
