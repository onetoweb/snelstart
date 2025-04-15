<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * SaleOrder Endpoint.
 */
class SaleOrder extends AbstractEndpoint
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
        return $this->client->get('verkooporders', [
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
        return $this->client->get("verkooporders/$id");
    }
    
    /**
     * @param array $data
     * 
     * @return array
     */
    public function create(array $data): array
    {
        return $this->client->post('verkooporders', $data);
    }
    
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array
     */
    public function update(string $id, array $data): array
    {
        return $this->client->put("verkooporders/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return bool
     */
    public function delete(string $id): bool
    {
        return $this->client->delete("verkooporders/$id");
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array
     */
    public function updateProcessStatus(string $id, array $data): array
    {
        return $this->client->put("verkooporders/$id/ProcesStatus", $data);
    }
}