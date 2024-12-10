<?php

namespace Kvostyc\PrintForgeStock;

use Kvostyc\PrintForgeStock\Traits\HasOrderItems;
use Kvostyc\PrintForgeStock\Traits\HasOrderItemStates;
use Kvostyc\PrintForgeStock\Traits\HasOrders;

class StockService
{
    use HasOrderItemStates;
    use HasOrderItems;
    use HasOrders;

    protected $apiUrl;
    protected $apiKey;

    public function __construct(string $apiUrl, string $apiKey)
    {
        $this->apiUrl = $apiUrl;
        $this->apiKey = $apiKey;
    }
}
