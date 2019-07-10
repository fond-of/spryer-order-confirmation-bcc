<?php

declare(strict_types = 1);

namespace FondOfSpryker\Zed\OrderConfirmationBcc\Business\Mail;

use Orm\Zed\Sales\Persistence\SpySalesOrder;

interface MailHandlerInterface
{
    /**
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrder $salesOrderEntity
     * @param string[] $recipientsBcc
     *
     * @return void
     */
    public function sendOrderConfirmationMailWithBcc(SpySalesOrder $salesOrderEntity, array $recipientsBcc): void;
}
