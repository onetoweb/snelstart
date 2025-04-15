<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * BankStatementFile Endpoint.
 */
class BankStatementFile extends AbstractEndpoint
{
    /**
     * @param array $data
     * 
     * @return array
     */
    public function create(array $data): array
    {
        return $this->client->post('bankafschriftbestanden', $data);
    }
}