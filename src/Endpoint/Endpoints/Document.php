<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * Document Endpoint.
 */
class Document extends AbstractEndpoint
{
    /**
     * @param string $documentType
     * @param string $id
     * 
     * @return array
     */
    public function getType(string $documentType, string $id): array
    {
        return $this->client->get("/documenten/$documentType/$id");
    }
    
    /**
     * @param string $documentType
     * @param array $data
     * 
     * @return array|null
     */
    public function create(string $documentType, array $data): ?array
    {
        return $this->client->post("/documenten/$documentType", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return array
     */
    public function get(string $id): array
    {
        return $this->client->get("/documenten/$id");
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array
     */
    public function update(string $id, array $data): array
    {
        return $this->client->put("/documenten/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return bool
     */
    public function delete(string $id): bool
    {
        return $this->client->delete("/documenten/$id");
    }
}