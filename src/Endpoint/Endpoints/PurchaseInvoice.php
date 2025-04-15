<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * PurchaseInvoice Endpoint.
 */
class PurchaseInvoice extends AbstractEndpoint
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
        return $this->client->get('inkoopfacturen', [
            '$skip' => $skip,
            '$top' => $top,
            '$filter' => $filter
        ]);
    }
}