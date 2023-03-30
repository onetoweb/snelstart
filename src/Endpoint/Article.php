<?php

namespace Onetoweb\Snelstart\Endpoint;

/**
 * Article Endpoint.
 */
class Article extends AbstractEndpoint
{
    /**
     * @param string $relationId
     * @param int $ammount
     * @param int $skip = 0
     * @param int $top = 50
     * @param string $filter = null
     * 
     * @return array
     */
    public function list(string $relationId, int $ammount, int $skip = 0, int $top = 50, string $filter = null): array
    {
        return $this->client->get('artikelen', [
            '$relatieId' => $relationId,
            '$aantal' => $ammount,
            '$skip' => $skip,
            '$top' => $top,
            '$filter' => $filter
        ]);
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