<?php

namespace FondOfSpryker\Zed\OrderConfirmationBcc\Business;

use Orm\Zed\Sales\Persistence\SpySalesOrder;
use Spryker\Zed\Oms\Business\OmsFacadeInterface as BaseOmsFacadeInterface;

interface OrderConfirmationBccFacadeInterface extends BaseOmsFacadeInterface
{
    /**
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrder $salesOrderEntity
     * @param string|null|array $bcc
     *
     * @return void
     */
    public function sendOrderConfirmationMailWithBcc(SpySalesOrder $salesOrderEntity, ?array $bcc = null): void;
}
