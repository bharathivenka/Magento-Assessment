<?php

namespace Task\Api\Model;

use Magento\Framework\Model\AbstractModel;
use Task\Api\Model\ResourceModel\Addcart as ResourceModel;

class Addcart extends AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init(ResourceModel::class);
        parent::_construct();
    }
}