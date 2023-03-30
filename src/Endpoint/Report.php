<?php

namespace Onetoweb\Snelstart\Endpoint;

use DateTimeInterface;
use DateTime;

/**
 * Report Endpoint.
 */
class Report extends AbstractEndpoint
{
    /**
     * @param DateTime $start
     * @param DateTime $end
     * 
     * @return array
     */
    public function columnBalance(DateTime $start, DateTime $end): array
    {
        return $this->client->get('rapportages/kolommenbalans', [
            'start' => $start->format(DateTimeInterface::RFC3339),
            'end' => $end->format(DateTimeInterface::RFC3339)
        ]);
    }
    
    /**
     * @param DateTime $start
     * @param DateTime $end
     * 
     * @return array
     */
    public function periodBalance(DateTime $start, DateTime $end): array
    {
        return $this->client->get('rapportages/periodebalans', [
            'start' => $start->format(DateTimeInterface::RFC3339),
            'end' => $end->format(DateTimeInterface::RFC3339)
        ]);
    }
}