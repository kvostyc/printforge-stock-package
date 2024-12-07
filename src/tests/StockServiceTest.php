<?php

namespace Kvostyc\PrintForgeStock\Tests;

use PHPUnit\Framework\TestCase;
use Kvostyc\PrintForgeStock\StockService;

class StockServiceTest extends TestCase
{
    public function testSendOrder()
    {
        $stockService = new StockService('https://api.example.com', 'test-api-key');

        $orderData = [
            'order_id' => 123,
            'items' => [
                ['product_id' => 1, 'quantity' => 2],
            ],
        ];

        $response = $stockService->sendOrder($orderData);

        $this->assertArrayHasKey('order_id', $response);
    }
}