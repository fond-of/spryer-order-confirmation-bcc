<?php

declare(strict_types = 1);

namespace FondOfSpryker\Zed\OrderConfirmationBcc\Communication\Plugin\Oms\Command;

use Orm\Zed\Sales\Persistence\SpySalesOrder;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Oms\Business\Util\ReadOnlyArrayObject;
use Spryker\Zed\Oms\Dependency\Plugin\Command\CommandByOrderInterface;

/**
 * @method \FondOfSpryker\Zed\OrderConfirmationBcc\Business\OrderConfirmationBccFacadeInterface getFacade()
 * @method \FondOfSpryker\Zed\OrderConfirmationBcc\OrderConfirmationBccConfig getConfig()
 */
class SendOrderConfirmationWithBccPlugin extends AbstractPlugin implements CommandByOrderInterface
{
    /**
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrderItem[] $orderItems
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrder $orderEntity
     * @param \Spryker\Zed\Oms\Business\Util\ReadOnlyArrayObject $data
     *
     * @return array
     */
    public function run(array $orderItems, SpySalesOrder $orderEntity, ReadOnlyArrayObject $data): array
    {
        $this->getFacade()->sendOrderConfirmationMailWithBcc(
            $orderEntity,
            $this->getConfig()->getBccEmailAddress()
        );

        return [];
    }
}
