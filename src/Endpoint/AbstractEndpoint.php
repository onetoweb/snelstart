<?php

namespace Onetoweb\Snelstart\Endpoint;

use Onetoweb\Snelstart\Client;

/**
 * Abstract Endpoint.
 */
abstract class AbstractEndpoint implements EndpointInterface
{
    /**
     * @param Client $client
     */
    public function __construct(
        protected Client $client
    ) {
        $this->client = $client;
    }
}
