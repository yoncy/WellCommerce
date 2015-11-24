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

namespace WellCommerce\AppBundle\Controller\Box;

use WellCommerce\AppBundle\Controller\Box\AbstractBoxController;
use WellCommerce\AppBundle\Controller\Box\BoxControllerInterface;

/**
 * Class CategoryMenuBoxController
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class CategoryMenuBoxController extends AbstractBoxController implements BoxControllerInterface
{
    /**
     * {@inheritdoc}
     */
    public function indexAction()
    {
        return $this->displayTemplate('index', [
            'active' => $this->manager->getCategoryContext()->getCurrentCategoryIdentifier()
        ]);
    }
}