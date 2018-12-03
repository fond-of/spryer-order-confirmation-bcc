<?php

namespace FondOfSpryker\Zed\OrderConfirmationBcc\Business;

use Orm\Zed\Sales\Persistence\SpySalesOrder;
use Spryker\Zed\Oms\Business\OmsFacade as BaseOmsFacade;

/**
 * @method \FondOfSpryker\Zed\OrderConfirmationBcc\Business\OrderConfirmationBccFacadeBusinessFactory getFactory()
 */
class OrderConfirmationBccFacade extends BaseOmsFacade implements OrderConfirmationBccFacadeInterface
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
