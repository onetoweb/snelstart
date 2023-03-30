<?php

namespace Onetoweb\Snelstart\Endpoint;

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