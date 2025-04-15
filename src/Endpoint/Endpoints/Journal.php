<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * Journal Endpoint.
 */
class Journal extends AbstractEndpoint
{
    /**
     * @return array
     */
    public function list(): array
    {
        return $this->client->get('dagboeken');
    }
}