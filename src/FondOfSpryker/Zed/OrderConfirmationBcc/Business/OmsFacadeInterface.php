<?php

namespace FondOfSpryker\Zed\OrderConfirmationBcc\Business;

use Orm\Zed\Sales\Persistence\SpySalesOrder;
use Spryker\Zed\Oms\Business\OmsFacadeInterface as BaseOmsFacadeInterface;

interface OmsFacadeInterface extends BaseOmsFacadeInterface
{
    /**
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrder $salesOrderEntity
     * @param string|null $bcc
     *
     * @return mixed
     */
    public function sendOrderConfirmationMailWithBcc(SpySalesOrder $salesOrderEntity, ?string $bcc = null);
}
