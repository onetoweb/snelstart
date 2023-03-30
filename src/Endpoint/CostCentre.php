<?php

namespace Onetoweb\Snelstart\Endpoint;

/**
 * CostCentre Endpoint.
 */
class CostCentre extends AbstractEndpoint
{
    /**
     * @return array
     */
    public function list(): array
    {
        return $this->client->get('kostenplaatsen');
    }
    
    /**
     * @param string $id
     * 
     * @return array
     */
    public function get(string $id): array
    {
        return $this->client->get("kostenplaatsen/$id");
    }
    
    /**
     * @param array $data
     * 
     * @return array
     */
    public function create(array $data): array
    {
        return $this->client->post('kostenplaatsen', $data);
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
        
        return $this->client->put("kostenplaatsen/$id", $data);
    }
    
    /**
     * @param string $id
     *
     * @return bool
     */
    public function delete(string $id): bool
    {
        return $this->client->delete("kostenplaatsen/$id");
    }
}