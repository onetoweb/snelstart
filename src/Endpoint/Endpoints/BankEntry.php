<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * BankEntry Endpoint.
 */
class BankEntry extends AbstractEndpoint
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
        return $this->client->get('bankboekingen', [
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
        return $this->client->get("bankboekingen/$id");
    }
    
    /**
     * @param array $data
     * 
     * @return array
     */
    public function create(array $data): array
    {
        return $this->client->post('bankboekingen', $data);
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array
     */
    public function update(string $id, array $data): array
    {
        $data['id'] = $id;
        
        return $this->client->put("bankboekingen/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return bool
     */
    public function delete(string $id): bool
    {
        return $this->client->delete("bankboekingen/$id");
    }
}