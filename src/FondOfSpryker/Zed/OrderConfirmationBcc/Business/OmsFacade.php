<?php

namespace FondOfSpryker\Zed\OrderConfirmationBcc\Business;

use Orm\Zed\Sales\Persistence\SpySalesOrder;
use Spryker\Zed\Oms\Business\OmsFacade as BaseOmsFacade;

/**
 * @method \FondOfSpryker\Zed\OrderConfirmationBcc\Business\OmsBusinessFactory getFactory()
 */
class OmsFacade extends BaseOmsFacade implements OmsFacadeInterface
{
    /**
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrder $salesOrderEntity
     * @param string|null $bcc
     *
     * @return void
     */
    public function sendOrderConfirmationMailWithBcc(SpySalesOrder $salesOrderEntity, ?string $bcc = null)
    {
        $this
            ->getFactory()
            ->createMailHandler()
            ->sendOrderConfirmationMailWithBcc($salesOrderEntity, $bcc);
    }
}
