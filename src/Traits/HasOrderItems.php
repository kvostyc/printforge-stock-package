<?php

namespace Kvostyc\PrintForgeStock\Traits;

use Kvostyc\PrintForgeStock\Helpers\RequestHelper;

trait HasOrderItems
{
    public function updateOrderItem(string|int $id, array $orderItemData): array
    {
        $endpoint = "{$this->apiUrl}/api/remote/v1/order-items/{$id}";

        // Use the patch method from RequestHelper to update the order
        $response = RequestHelper::patch($endpoint, $orderItemData, $this->apiKey);

        return $response;
    }
}
