<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * ItemDepartment Endpoint.
 */
class ItemDepartment extends AbstractEndpoint
{
    /**
     * @return array
     */
    public function list(): array
    {
        return $this->client->get('artikelomzetgroepen');
    }
    
    /**
     * @param int $id
     * 
     * @return array
     */
    public function get(string $id): array
    {
        return $this->client->get("artikelomzetgroepen/$id");
    }
}