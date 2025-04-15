<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * PurchaseEntry Endpoint.
 */
class PurchaseEntry extends AbstractEndpoint
{
    /**
     * @param string $id
     * 
     * @return array
     */
    public function get(string $id): array
    {
        return $this->client->get("inkoopboekingen/$id");
    }
    
    /**
     * @param array $data
     * 
     * @return array
     */
    public function create(array $data): array
    {
        return $this->client->post('inkoopboekingen', $data);
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
        
        return $this->client->put("inkoopboekingen/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return bool
     */
    public function delete(string $id): bool
    {
        return $this->client->delete("inkoopboekingen/$id");
    }
    
    /**
     * @param array $data
     * 
     * @return array
     */
    public function createFromAttachment(array $data): array
    {
        return $this->client->post('inkoopboekingen/CreateFromAttachment', $data);
    }
    
    /**
     * @param string $instanceId
     * 
     * @return array
     */
    public function getCreateFromAttachmentStatus(string $instanceId): array
    {
        return $this->client->get('inkoopboekingen/GetCreateFromAttachmentStatus', [
            'instanceId' => $instanceId
        ]);
    }
    
    /**
     * @param array $data
     *
     * @return array
     */
    public function ubl(array $data): array
    {
        return $this->client->post('inkoopboekingen/ubl', $data);
    }
}