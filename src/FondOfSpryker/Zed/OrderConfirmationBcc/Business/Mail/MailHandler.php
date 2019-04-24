<?php

namespace FondOfSpryker\Zed\OrderConfirmationBcc\Business\Mail;

use FondOfSpryker\Zed\Oms\Communication\Plugin\Mail\OrderConfirmationMailTypePlugin;
use FondOfSpryker\Zed\OrderConfirmationBcc\Dependency\Facade\OmsToMailInterface;
use Generated\Shared\Transfer\MailTransfer;
use Orm\Zed\Sales\Persistence\SpySalesOrder;
use Spryker\Zed\Oms\Business\Mail\MailHandler as BaseMailHandler;
use Spryker\Zed\Oms\Dependency\Facade\OmsToSalesInterface;

class MailHandler extends BaseMailHandler
{
    /**
     * MailHandler constructor.
     *
     * @param \Spryker\Zed\Oms\Dependency\Facade\OmsToSalesInterface $salesFacade
     * @param \FondOfSpryker\Zed\OrderConfirmationBcc\Dependency\Facade\OmsToMailInterface $mailFacade
     */
    public function __construct(OmsToSalesInterface $salesFacade, OmsToMailInterface $mailFacade)
    {
        $this->saleFacade = $salesFacade;
        $this->mailFacade = $mailFacade;
    }

    /**
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrder $salesOrderEntity
     * @param array|null $bcc
     *
     * @return void
     */
    public function sendOrderConfirmationMailWithBcc(SpySalesOrder $salesOrderEntity, ?array $bcc): void
    {
        $orderTransfer = $this->getOrderTransfer($salesOrderEntity);

        $mailTransfer = new MailTransfer();
        $mailTransfer->setOrder($orderTransfer);
        $mailTransfer->setType(OrderConfirmationMailTypePlugin::MAIL_TYPE);
        $mailTransfer->setLocale($orderTransfer->getLocale());

        $this->mailFacade->handleMailWithBcc($mailTransfer, $bcc);
    }
}
