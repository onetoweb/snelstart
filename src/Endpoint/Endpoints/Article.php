<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * Article Endpoint.
 */
class Article extends AbstractEndpoint
{
    /**
     * @param string $relationId
     * @param int $skip = 0
     * @param int $top = 50
     * @param string $filter = null
     * @param int $amount = null
     * 
     * @return array
     */
    public function list(string $relationId, int $skip = 0, int $top = 50, string $filter = null, int $amount = null): array
    {
        $query = [
            '$relatieId' => $relationId,
            '$skip' => $skip,
            '$top' => $top,
            '$filter' => $filter
        ];
        
        if ($amount !== null) {
            $query['$aantal'] = $amount;
        }
        
        return $this->client->get('artikelen', $query);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function get(string $id): ?array
    {
        return $this->client->get("artikelen/$id");
    }
    
    /**
     * @param array $data
     * 
     * @return array
     */
    public function create(array $data): array
    {
        return $this->client->post('artikelen', $data);
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
        
        return $this->client->put("artikelen/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return bool
     */
    public function delete(string $id): bool
    {
        return $this->client->delete("artikelen/$id");
    }
    
    /**
     * @param string $id
     * 
     * @return array
     */
    public function getCustomFields(string $id): array
    {
        return $this->client->get("artikelen/$id/customFields");
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array
     */
    public function updateCustomFields(string $id, array $data): array
    {
        return $this->client->put("artikelen/$id/customFields", $data);
    }
    
    /**
     * @param int $skip = 0
     * @param int $top = 50
     * @param string $filter = null
     * 
     * @return array
     */
    public function getPriceAgreements(int $skip = 0, int $top = 50, string $filter = null): array
    {
        return $this->client->get('artikelen/prijsafspraken', [
            '$skip' => $skip,
            '$top' => $top,
            '$filter' => $filter
        ]);
    }
}