<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * SaleOrderTemplate Endpoint.
 */
class SaleOrderTemplate extends AbstractEndpoint
{
    /**
     * @return array
     */
    public function list(): array
    {
        return $this->client->get('verkoopordersjablonen');
    }
    
    /**
     * @param string $id
     * 
     * @return array
     */
    public function get(string $id): array
    {
        return $this->client->get("verkoopordersjablonen/$id");
    }
}