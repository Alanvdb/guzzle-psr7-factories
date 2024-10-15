<?php declare(strict_types=1);

namespace AlanVdb\Http\Definition;

interface GuzzleServerRequestFromGlobalsFactoryInterface
{
    public function createServerRequestFromGlobals(): ServerRequestInterface;
}
