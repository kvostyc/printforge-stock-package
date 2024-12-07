<?php

namespace Kvostyc\PrintForgeStock\Helpers;

use GuzzleHttp\Client;

class RequestHelper
{
    /**
     * Send a POST request to the given URL.
     */
    public static function post(string $url, array $data, string $apiKey): array
    {
        $client = new Client();
        $response = $client->post($url, [
            'json' => $data,
            'headers' => [
                'Authorization' => "Bearer $apiKey",
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Send a GET request to the given URL.
     */
    public static function get(string $url, string $apiKey): array
    {
        $client = new Client();
        $response = $client->get($url, [
            'headers' => [
                'Authorization' => "Bearer $apiKey",
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Send a PUT request to the given URL.
     */
    public static function put(string $url, array $data, string $apiKey): array
    {
        $client = new Client();
        $response = $client->put($url, [
            'json' => $data,
            'headers' => [
                'Authorization' => "Bearer $apiKey",
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Send a PATCH request to the given URL.
     */
    public static function patch(string $url, array $data, string $apiKey): array
    {
        $client = new Client();
        $response = $client->patch($url, [
            'json' => $data,
            'headers' => [
                'Authorization' => "Bearer $apiKey",
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Send a DELETE request to the given URL.
     */
    public static function delete(string $url, string $apiKey): array
    {
        $client = new Client();
        $response = $client->delete($url, [
            'headers' => [
                'Authorization' => "Bearer $apiKey",
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
