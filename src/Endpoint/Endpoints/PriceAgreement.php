<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * PriceAgreement Endpoint.
 */
class PriceAgreement extends AbstractEndpoint
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
        return $this->client->get('prijsafspraken', [
            '$skip' => $skip,
            '$top' => $top,
            '$filter' => $filter
        ]);
    }
}