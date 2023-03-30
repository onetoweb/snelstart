<?php

namespace Onetoweb\Snelstart\Endpoint;

/**
 * Authorization Endpoint.
 */
class Authorization extends AbstractEndpoint
{
    /**
     * @param string $id
     * 
     * @return array
     */
    public function hasUserAccessToAdministration(string $id): array
    {
        return $this->client->get('authorization/HasUserAccessToAdministration', [
            'userIdentifier' => $id
        ]);
    }
}