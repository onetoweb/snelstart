<?php

namespace Onetoweb\Snelstart\Endpoint;

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