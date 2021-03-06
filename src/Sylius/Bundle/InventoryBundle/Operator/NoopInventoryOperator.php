<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\InventoryBundle\Operator;

use Sylius\Bundle\InventoryBundle\Model\StockableInterface;

/**
 * Inventory operator which does not adjust inventory
 *
 * @author Daniel Richter <nexyz9@gmail.com>
 */
class NoopInventoryOperator implements InventoryOperatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function increase(StockableInterface $stockable, $quantity)
    {
        // nothing happens.
    }

    /**
     * {@inheritdoc}
     */
    public function decrease($inventoryUnits)
    {
        // nothing happens.
    }
}
