<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\ShopBundle\Tests\Manager;

use WellCommerce\Bundle\CoreBundle\Manager\ManagerInterface;
use WellCommerce\Bundle\CoreBundle\Test\Manager\AbstractManagerTestCase;
use WellCommerce\Bundle\ShopBundle\Entity\ShopInterface;

/**
 * Class ShopManagerTest
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ShopManagerTest extends AbstractManagerTestCase
{
    protected function get() : ManagerInterface
    {
        return $this->container->get('shop.manager');
    }
    
    protected function getExpectedEntityInterface(): string
    {
        return ShopInterface::class;
    }
}
