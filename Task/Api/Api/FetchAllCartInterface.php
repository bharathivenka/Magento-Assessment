<?php

namespace Task\Api\Api;

interface FetchAllCartInterface
{

    /**
     * @param int|null $pageId
     * @return \Task\Api\Api\DataInterface[]
     */
    public function getCartList(int $pageId = null);
}
