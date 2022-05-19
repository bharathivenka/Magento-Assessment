<?php
namespace Task\Api\Model\ResourceModel\Addcart;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Task\Api\Model\Addcart as Model;
use Task\Api\Model\ResourceModel\Addcart as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
        parent::_construct();

    }
}
