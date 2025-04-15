<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * Actionprice Endpoint.
 */
class EchoTest extends AbstractEndpoint
{
    /**
     * @param string $input
     * 
     * @return string
     */
    public function test(string $input): array
    {
        return $this->client->get("echo/$input");
    }
}