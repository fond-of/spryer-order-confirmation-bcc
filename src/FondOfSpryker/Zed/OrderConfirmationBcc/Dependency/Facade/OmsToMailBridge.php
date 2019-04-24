<?php

namespace FondOfSpryker\Zed\OrderConfirmationBcc\Dependency\Facade;

use FondOfSpryker\Zed\Mail\Business\MailFacadeInterface;
use Generated\Shared\Transfer\MailTransfer;
use Spryker\Zed\Oms\Dependency\Facade\OmsToMailBridge as BaseOmsToMailBridge;

class OmsToMailBridge extends BaseOmsToMailBridge implements OmsToMailInterface
{
    /**
     * @param \FondOfSpryker\Zed\Mail\Business\MailFacadeInterface $mailFacade
     */
    public function __construct(MailFacadeInterface $mailFacade)
    {
        $this->mailFacade = $mailFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\MailTransfer $mailTransfer
     * @param array|null $bcc
     *
     * @return mixed|void
     */
    public function handleMailWithBcc(MailTransfer $mailTransfer, ?array $bcc): void
    {
        $this->mailFacade->handleMailWithBcc($mailTransfer, $bcc);
    }
}
