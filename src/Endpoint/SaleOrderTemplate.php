<?php

namespace Onetoweb\Snelstart\Endpoint;

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