<?php

namespace FondOfSpryker\Zed\OrderConfirmationBcc\Dependency\Facade;

use Generated\Shared\Transfer\MailTransfer;
use Spryker\Zed\Oms\Dependency\Facade\OmsToMailInterface as BaseOmsToMailInterface;

interface OmsToMailInterface extends BaseOmsToMailInterface
{
    /**
     * @param \Generated\Shared\Transfer\MailTransfer $mailTransfer
     * @param string|null $bcc
     *
     * @return mixed
     */
    public function handleMailWithBcc(MailTransfer $mailTransfer, ?string $bcc);
}
