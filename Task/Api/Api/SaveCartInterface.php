<?php

namespace Task\Api\Api;

interface SaveCartInterface
{
    /**
     * @param string $sku
     * @param int $quoteId
     * @param int $customerId
     * @param $createdAt
     * @return \Task\Api\Api\DataInterface[]
     */
    public function saveCart(string $sku, int $quoteId, int $customerId = null, $createdAt = null);
}
