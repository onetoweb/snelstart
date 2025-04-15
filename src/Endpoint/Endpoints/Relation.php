<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * Relation Endpoint.
 */
class Relation extends AbstractEndpoint
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
        return $this->client->get('relaties', [
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
        return $this->client->get("relaties/$id");
    }
    
    /**
     * @param array $data
     * 
     * @return array
     */
    public function create(array $data): array
    {
        return $this->client->post('relaties', $data);
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array
     */
    public function update(string $id, array $data): array
    {
        return $this->client->put("relaties/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return bool
     */
    public function delete(string $id): bool
    {
        return $this->client->delete("relaties/$id");
    }
    
    /**
     * @param string $id
     * 
     * @return array
     */
    public function customFields(string $id): array
    {
        return $this->client->get("relaties/$id/customFields");
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array
     */
    public function updateCustomFields(string $id, array $data): array
    {
        return $this->client->put("relaties/$id/customFields", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return array
     */
    public function continuousDirectDebitAuthorization(string $id): array
    {
        return $this->client->get("relaties/$id/doorlopendeincassomachtigingen");
    }
    
    /**
     * @param string $id
     * 
     * @return array
     */
    public function purchaseEntries(string $id): array
    {
        return $this->client->get("relaties/$id/inkoopboekingen");
    }
    
    /**
     * @param string $id
     * 
     * @return array
     */
    public function saleEntries(string $id): array
    {
        return $this->client->get("relaties/$id/verkoopboekingen");
    }
}