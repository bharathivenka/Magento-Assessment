<?php

namespace Task\Api\Model\Api;

use Task\Api\Api\DeleteCartInterface;
use Task\Api\Api\DataInterfaceFactory;
use Task\Api\Model\AddcartFactory as CartModel;
use Task\Api\Model\ResourceModel\Addcart as CartResource;
use Task\Api\Model\ResourceModel\Addcart\CollectionFactory;
use Magento\Framework\Exception\LocalizedException;

class DeleteCartRepository implements DeleteCartInterface
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
    public function deleteCartById(int $id)
    {
        $model = $this->model->create();
        $this->resource->load($model, $id, 'id');

        try {
            $this->resource->delete($model);
            $response = ['success' => 'Deleted Successfully'];
            return $response;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
