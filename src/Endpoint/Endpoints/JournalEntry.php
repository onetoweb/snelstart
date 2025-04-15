<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * JournalEntry Endpoint.
 */
class JournalEntry extends AbstractEndpoint
{
    /**
     * @param string $id
     * 
     * @return array
     */
    public function get(string $id): array
    {
        return $this->client->get("memoriaalboekingen/$id");
    }
    
    /**
     * @param array $data
     * 
     * @return array
     */
    public function create(array $data): array
    {
        return $this->client->post('memoriaalboekingen', $data);
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array
     */
    public function update(string $id, array $data): array
    {
        //$data['id'] = $id;
        
        return $this->client->put("memoriaalboekingen/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return bool
     */
    public function delete(string $id): bool
    {
        return $this->client->delete("memoriaalboekingen/$id");
    }
}