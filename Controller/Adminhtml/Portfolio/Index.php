<?php
/**
 *
 * Copyright © 2019 Magenuts Pvt Ltd. All rights reserved.
 
 */
namespace Magenuts\Portfolio\Controller\Adminhtml\Portfolio;

use Magento\Backend\App\Action;

class Index extends \Magenuts\Portfolio\Controller\Adminhtml\Portfolio
{
    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        $this->_initAction();
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Portfolio'));
        $this->_view->renderLayout();
    }
}
