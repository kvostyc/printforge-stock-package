<?php

namespace Kvostyc\PrintForgeStock\Traits;

use Kvostyc\PrintForgeStock\Helpers\RequestHelper;

trait HasOrderItemStates
{
    public function getOrderItemStates(string $filters = ""): array
    {
        $endpoint = "{$this->apiUrl}/api/remote/v1/order-item-states" . $filters;
        $response = RequestHelper::get($endpoint, $this->apiKey);

        return $response;
    }
}
