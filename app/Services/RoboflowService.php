<?php

namespace App\Services;

use GuzzleHttp\Client;

class RoboflowService
{
    protected $client;
    protected $apiKey;
    protected $apiUrl;

    public function __construct()
    {
        $this->client = new Client([
            'verify' => false, // Disable SSL verification (only for debugging)
        ]);        
        $this->apiKey = 'z64VlnGxCBmSoCvmyuzJ';
        $this->apiUrl = 'https://detect.roboflow.com/batik-classification-9983a-frndb/3';
    }

    public function searchImage($imagePath)
    {
        try {
            $response = $this->client->post($this->apiUrl, [
                'query' => [
                    'api_key' => $this->apiKey,
                ],
                'multipart' => [
                    [
                        'name'     => 'file',
                        'contents' => fopen($imagePath, 'r'),
                        'filename' => basename($imagePath),
                    ],
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Roboflow API Error: ' . $e->getMessage());
        }
    }

}