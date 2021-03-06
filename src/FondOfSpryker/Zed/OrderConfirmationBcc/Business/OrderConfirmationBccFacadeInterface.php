<?php

declare(strict_types = 1);

namespace FondOfSpryker\Zed\OrderConfirmationBcc\Business;

use Orm\Zed\Sales\Persistence\SpySalesOrder;
use Spryker\Zed\Oms\Business\OmsFacadeInterface as SprykerOmsFacadeInterface;

interface OrderConfirmationBccFacadeInterface extends SprykerOmsFacadeInterface
{
    /**
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrder $salesOrderEntity
     * @param string[] $recipientsBcc
     *
     * @return void
     */
    public function sendOrderConfirmationMailWithBcc(SpySalesOrder $salesOrderEntity, array $recipientsBcc): void;
}
