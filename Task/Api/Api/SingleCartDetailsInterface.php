<?php

namespace Task\Api\Api;

interface SingleCartDetailsInterface
{
    /**
     * @param int $id
     * @return \Task\Api\Api\DataInterface[]
     */
    public function getCartById(int $id);
}
