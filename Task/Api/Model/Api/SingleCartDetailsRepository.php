<?php

namespace Task\Api\Model\Api;

use Task\Api\Api\SingleCartDetailsInterface;
use Task\Api\Api\DataInterfaceFactory;
use Task\Api\Model\AddcartFactory as CartModel;
use Task\Api\Model\ResourceModel\Addcart as CartResource;
use Task\Api\Model\ResourceModel\Addcart\CollectionFactory;
use Magento\Framework\Exception\LocalizedException;

class SingleCartDetailsRepository implements SingleCartDetailsInterface
{
    /**
     * @var DataInterfaceFactory
     */

    private $dataInterfaceFactory;

    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var CartModel
     */
    private $model;

    /**
     * @var CartResource
     */

    private $resource;

    public function __construct(
        CollectionFactory $collectionFactory,
        DataInterfaceFactory $dataInterfaceFactory,
        CartModel $model,
        CartResource $resource
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->dataInterfaceFactory = $dataInterfaceFactory;
        $this->model = $model;
        $this->resource = $resource;
    }
    /**
     * @param int $id
     * @return \Task\Api\Api\DataInterface[]
     */
    public function getCartById(int $id)
    {
        $model = $this->model->create();
        $this->resource->load($model, $id, 'id');
        $model->getData();

        $dataInterface = $this->dataInterfaceFactory->create();
        $dataInterface->setId($model->getId());
        $dataInterface->setSku($model->getSku());
        $dataInterface->setCustomerId($model->getCustomerId());
        $dataInterface->setQuoteId($model->getQuoteId());
        $dataInterface->setCreatedAt($model->getCreatedAt());
        $data[] = $dataInterface;
        return $data;

    }
}
