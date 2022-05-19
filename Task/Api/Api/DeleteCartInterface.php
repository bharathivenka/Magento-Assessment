<?php

namespace Task\Api\Api;

interface DeleteCartInterface
{

    /**
     * @param int $id
     * @return \Task\Api\Api\DataInterface[]
     */
    public function deleteCartById(int $id);
}
