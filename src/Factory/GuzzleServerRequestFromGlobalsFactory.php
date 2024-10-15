<?php declare(strict_types=1);

namespace AlanVdb\Http\Factory;

use AlanVdb\Http\Definition\GuzzleServerRequestFromGlobalsFactoryInterface;
use Psr\Http\Message\ServerRequestInterface;
use GuzzleHttp\Psr7\ServerRequest;

class GuzzleServerRequestFromGlobalsFactory
    implements GuzzleServerRequestFromGlobalsFactoryInterface
{
    public function createServerRequestFromGlobals(): ServerRequestInterface
    {
        return ServerRequest::fromGlobals();
    }
}
