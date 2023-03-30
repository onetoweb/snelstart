<?php

namespace Onetoweb\Snelstart\Endpoint;

/**
 * SaleInvoice Endpoint.
 */
class SaleInvoice extends AbstractEndpoint
{
    /**
     * @param int $skip = 0
     * @param int $top = 50
     * @param string $filter = null
     * 
     * @return array
     */
    public function list(int $skip = 0, int $top = 50, string $filter = null): array
    {
        return $this->client->get('verkoopfacturen', [
            '$skip' => $skip,
            '$top' => $top,
            '$filter' => $filter
        ]);
    }
    
    /**
     * @param string $id
     * 
     * @return array
     */
    public function get(string $id): array
    {
        return $this->client->get("verkoopfacturen/$id");
    }
    
    /**
     * @param string $id
     *
     * @return array
     */
    public function ubl(string $id): array
    {
        return $this->client->get("verkoopfacturen/$id/ubl");
    }
}