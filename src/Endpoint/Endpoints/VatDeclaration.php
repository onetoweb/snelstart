<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * VatDeclaration Endpoint.
 */
class VatDeclaration extends AbstractEndpoint
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
        return $this->client->get('btwaangiftes', [
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
        return $this->client->get("btwaangiftes/$id");
    }
    
    /**
     * @param string $id
     * @param bool $isExternal = true
     * 
     * @return array
     */
    public function updateExternal(string $id, bool $isExternal = true): array
    {
        return $this->client->put("btwaangiftes/$id/externAangeven", [
            'isExternAangegeven' => $isExternal
        ]);
    }
}