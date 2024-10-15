<?php declare(strict_types=1);

namespace AlanVdb\Http\Factory;

use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;
use GuzzleHttp\Psr7\Uri;

class GuzzleUriFactory implements UriFactoryInterface
{
    public function createUri(string $uri = ''): UriInterface
    {
        return new Uri($uri);
    }
}
