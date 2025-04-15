<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * CompanyInfo Endpoint.
 */
class CompanyInfo extends AbstractEndpoint
{
    /**
     * @return array
     */
    public function get(): array
    {
        return $this->client->get('companyInfo');
    }
    
    /**
     * @param array $data
     * 
     * @return array
     */
    public function update(array $data): array
    {
        return $this->client->put('companyInfo', $data);
    }
}