<?php declare(strict_types=1);

namespace AlanVdb\Http\Factory;

use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\ServerRequestInterface;
use GuzzleHttp\Psr7\ServerRequest;
use InvalidArgumentException;

class GuzzleServerRequestFactory implements ServerRequestFactoryInterface
{
    public function createServerRequest(string $method, $uri, array $serverParams = []): ServerRequestInterface
    {
        if (empty($method)) {
            if (!empty($serverParams['REQUEST_METHOD'])) {
                $method = $serverParams['REQUEST_METHOD'];
            } else {
                throw new InvalidArgumentException('Cannot determine HTTP method');
            }
        }

        return new ServerRequest($method, $uri, [], null, '1.1', $serverParams);
    }
}
