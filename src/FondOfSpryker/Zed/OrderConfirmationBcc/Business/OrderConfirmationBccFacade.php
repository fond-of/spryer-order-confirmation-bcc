<?php

declare(strict_types = 1);

namespace FondOfSpryker\Zed\OrderConfirmationBcc\Business;

use Orm\Zed\Sales\Persistence\SpySalesOrder;
use Spryker\Zed\Oms\Business\OmsFacade as SprykerOmsFacade;

/**
 * @method OrderConfirmationBccBusinessFactory getFactory()
 */
class OrderConfirmationBccFacade extends SprykerOmsFacade implements OrderConfirmationBccFacadeInterface
{
    /**
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrder $salesOrderEntity
     * @param string[] $recipientsBcc
     *
     * @return void
     */
    public function sendOrderConfirmationMailWithBcc(SpySalesOrder $salesOrderEntity, array $recipientsBcc): void
    {
        $this->getFactory()
            ->createMailHandler()
            ->sendOrderConfirmationMailWithBcc($salesOrderEntity, $recipientsBcc);
    }
}
