<?php

namespace Kvostyc\PrintForgeStock\Traits;

use Kvostyc\PrintForgeStock\Helpers\RequestHelper;

trait HasOrders
{
    public function getOrders(string $filters = ""): array
    {
        $endpoint = "{$this->apiUrl}/api/remote/v1/orders" . $filters;
        $response = RequestHelper::get($endpoint, $this->apiKey);

        return $response;
    }

    /**
     * Send an order to the Stock API.
     */
    public function sendOrder(array $orderData): array
    {
        $endpoint = "{$this->apiUrl}/api/remote/v1/orders";
        $response = RequestHelper::post($endpoint, $orderData, $this->apiKey);

        return $response;
    }

    /**
     * Update an existing order in the Stock system.
     */
    public function updateOrder(string $orderNumber, array $orderData): array
    {
        $endpoint = "{$this->apiUrl}/api/remote/v1/orders/{$orderNumber}";

        // Use the patch method from RequestHelper to update the order
        $response = RequestHelper::patch($endpoint, $orderData, $this->apiKey);

        return $response;
    }
}
