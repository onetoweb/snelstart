<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * Country Endpoint.
 */
class Country extends AbstractEndpoint
{
    /**
     * @return array
     */
    public function list(): array
    {
        return $this->client->get('landen');
    }
    
    /**
     * @param string $id
     * 
     * @return array
     */
    public function get(string $id): array
    {
        return $this->client->get("landen/$id");
    }
}