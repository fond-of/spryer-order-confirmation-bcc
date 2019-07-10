<?php

declare(strict_types = 1);

namespace FondOfSpryker\Zed\OrderConfirmationBcc\Business\Mail;

use FondOfSpryker\Zed\Oms\Communication\Plugin\Mail\OrderConfirmationMailTypePlugin;
use Generated\Shared\Transfer\MailRecipientTransfer;
use Generated\Shared\Transfer\MailTransfer;
use Orm\Zed\Sales\Persistence\SpySalesOrder;
use Spryker\Zed\Oms\Business\Mail\MailHandler as SprykerMailHandler;

class MailHandler extends SprykerMailHandler implements MailHandlerInterface
{
    /**
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrder $salesOrderEntity
     * @param string[] $recipientsBcc
     *
     * @return void
     */
    public function sendOrderConfirmationMailWithBcc(SpySalesOrder $salesOrderEntity, array $recipientsBcc): void
    {
        $orderTransfer = $this->getOrderTransfer($salesOrderEntity);

        $mailTransfer = new MailTransfer();
        $mailTransfer->setOrder($orderTransfer);
        $mailTransfer->setType(OrderConfirmationMailTypePlugin::MAIL_TYPE);
        $mailTransfer->setLocale($orderTransfer->getLocale());

        foreach ($recipientsBcc as $mail => $name) {
            $mailTransfer->addRecipientBcc(
                $this->createMailRecipient($mail, $name)
            );
        }

        $this->mailFacade->handleMail($mailTransfer);
    }

    /**
     * @param string $eMail
     * @param string|null $name
     *
     * @return \Generated\Shared\Transfer\MailRecipientTransfer
     */
    protected function createMailRecipient(string $eMail, ?string $name = null): MailRecipientTransfer
    {
        return (new MailRecipientTransfer())
            ->setName($name)
            ->setEmail($eMail);
    }
}
