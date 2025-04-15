<?php

namespace Onetoweb\Snelstart\Endpoint\Endpoints;

use Onetoweb\Snelstart\Endpoint\AbstractEndpoint;

/**
 * VatRate Endpoint.
 */
class VatRate extends AbstractEndpoint
{
    /**
     * @return array
     */
    public function list(): array
    {
        return $this->client->get('btwtarieven');
    }
}