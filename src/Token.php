<?php

namespace Onetoweb\Snelstart;

use Stringable;
use DateTime;

/**
 * Token.
 */
class Token implements Stringable
{
    /**
     * @var string
     */
    private $value;
    
    /**
     * @var DateTime
     */
    private $expires;
    
    /**
     * @param string $value
     * @param DateTime $expires
     */
    public function __construct(string $value, DateTime $expires)
    {
        $this->value = $value;
        $this->expires = $expires;
    }
    
    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    
    /**
     * @return DateTime
     */
    public function getExpires(): DateTime
    {
        return $this->expires;
    }
    
    /**
     * @return bool
     */
    public function isExpired(): bool
    {
        return (new DateTime() > $this->expires);
    }
    
    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->value;
    }
}