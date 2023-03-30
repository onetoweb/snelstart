<?php

namespace Onetoweb\Snelstart\Endpoint;

/**
 * SaleEntry Endpoint.
 */
class SaleEntry extends AbstractEndpoint
{
    /**
     * @param string $id
     * 
     * @return array
     */
    public function get(string $id): array
    {
        return $this->client->get("verkoopboekingen/$id");
    }
    
    /**
     * @param array $data
     * 
     * @return array
     */
    public function create(array $data): array
    {
        return $this->client->post('verkoopboekingen', $data);
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array
     */
    public function update(string $id, array $data): array
    {
        return $this->client->put("verkoopboekingen/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return bool
     */
    public function delete(string $id): bool
    {
        return $this->client->delete("verkoopboekingen/$id");
    }
}