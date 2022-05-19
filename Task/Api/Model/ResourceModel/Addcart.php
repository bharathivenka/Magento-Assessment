<?php

namespace Task\Api\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Addcart extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('customer_table', 'id');
    }
}
