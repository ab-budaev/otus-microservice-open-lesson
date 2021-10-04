<?php

declare(strict_types=1);

namespace App\Services;

use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;
use Throwable;

class CommentsApiClient
{
    private $httpClient;

    private $logger;

    public function __construct(Client $httpClient, LoggerInterface $logger)
    {
        $this->httpClient = $httpClient;
        $this->logger = $logger;
    }

    public function getComments(string $entityType, int $entityId): array
    {
        try {
            $response = $this->httpClient->get('http://comments-nginx/api/v1/comments', [
                'query' => [
                    'entityType' => $entityType,
                    'entityId'   => $entityId,
                ],
            ]);

            return json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
        } catch (Throwable $exception) {
            $this->logger->error('Comment API request failed', [
                'exception'   => $exception,
                'entity_type' => $entityType,
                'entity_id'   => $entityId,
            ]);

            return [];
        }
    }
}
