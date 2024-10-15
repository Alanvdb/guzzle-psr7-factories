<?php declare(strict_types=1);

namespace AlanVdb\Http\Definition;

interface ServerRequestFromGlobalsFactoryInterface
{
    public function createServerRequestFromGlobals(): ServerRequestInterface;
}
