<?php

namespace Kvostyc\PrintForgeStock;

use Kvostyc\PrintForgeStock\Helpers\RequestHelper;
use Kvostyc\PrintForgeStock\Exceptions\StockException;

class StockService
{
    protected $apiUrl;
    protected $apiKey;

    public function __construct(string $apiUrl, string $apiKey)
    {
        $this->apiUrl = $apiUrl;
        $this->apiKey = $apiKey;
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
