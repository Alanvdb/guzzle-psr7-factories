<?php declare(strict_types=1);

namespace AlanVdb\Http\Definition;

use Psr\Http\Message\ServerRequestInterface;

interface IncomingRequestFactoryInterface
{
    public function createServerRequestFromGlobals(): ServerRequestInterface;
}
