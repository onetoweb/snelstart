<?php

namespace Onetoweb\Snelstart\Endpoint;

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