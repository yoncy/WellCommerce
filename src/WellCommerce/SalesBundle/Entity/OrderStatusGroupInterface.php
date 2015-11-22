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

namespace WellCommerce\SalesBundle\Entity;

use WellCommerce\CoreBundle\Entity\BlameableInterface;
use WellCommerce\CoreBundle\Entity\TimestampableInterface;
use WellCommerce\CoreBundle\Entity\TranslatableInterface;

/**
 * Interface OrderStatusGroupInterface
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface OrderStatusGroupInterface extends TranslatableInterface, TimestampableInterface, BlameableInterface
{
    /**
     * @return integer
     */
    public function getId();
}