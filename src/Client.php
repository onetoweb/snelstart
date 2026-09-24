<?php

namespace Onetoweb\Snelstart;

use GuzzleHttp\RequestOptions;
use GuzzleHttp\Client as GuzzleCLient;
use Onetoweb\Snelstart\Endpoint\Endpoints;
use Onetoweb\Snelstart\Token;
use Onetoweb\Snelstart\Config\{Method, Url};
use DateTime;
use Closure;

/**
 * Snelstart Api Client.
 */
#[\AllowDynamicProperties]
class Client
{
    /**
     * Version
     */
    public const VERSION = 2;
    
    /**
     * @var Token|null
     */
    private ?Token $token = null;
    
    /**
     * @var Closure|null
     */
    private ?Closure $updateTokenCallback = null;
    
    /**
     * @var int
     */
    private ?int $lastStatusCode = null;
    
    /**
     * @param string $clientKey
     * @param string $subscriptionKey
     * @param int $version = self::VERSION
     */
    public function __construct(
        
        #[\SensitiveParameter]
        private string $clientKey,
        
        #[\SensitiveParameter]
        private string $subscriptionKey,
        
        private int $version = self::VERSION
    ) {
        // load endpoints
        $this->loadEndpoints();
    }
    
    /**
     * @return void
     */
    private function loadEndpoints(): void
    {
        foreach (Endpoints::list() as $name => $class) {
            $this->{$name} = new $class($this);
        }
    }
    
    /**
     * @param Token $token
     * 
     * @return void
     */
    public function setToken(Token $token): void
    {
        $this->token = $token;
    }
    
    /**
     * @param callable $updateTokenCallback
     * 
     * @return void
     */
    public function setUpdateTokenCallback(callable $updateTokenCallback): void
    {
        $this->updateTokenCallback = $updateTokenCallback;
    }
    
    /**
     * @param string $endpoint
     * @param array $query = []
     * 
     * @return array|null
     */
    public function get(string $endpoint, array $query = []): ?array
    {
        return $this->request(Method::GET, $endpoint, [], $query);
    }
    
    /**
     * @param string $endpoint
     * @param array $data
     * 
     * @return array|null
     */
    public function post(string $endpoint, array $data): ?array
    {
        return $this->request(Method::POST, $endpoint, $data);
    }
    
    /**
     * @param string $endpoint
     * @param array $data
     * 
     * @return array|null
     */
    public function put(string $endpoint, array $data): ?array
    {
        return $this->request(Method::PUT, $endpoint, $data);
    }
    
    /**
     * @param string $endpoint
     * 
     * @return bool
     */
    public function delete(string $endpoint): bool
    {
        $this->request(Method::DELETE, $endpoint);
        
        return $this->lastStatusCode === 200;
    }
    
    /**
     * @param string $endpoint
     * 
     * @return array
     */
    public function head(string $endpoint): array
    {
        return $this->request(Method::HEAD, $endpoint);
    }
    
    /**
     * @param string $endpoint
     *
     * @return string
     */
    public function getUrl(string $endpoint): string
    {
        return implode('/', [
            Url::BASE->value,
            'v'.$this->version,
            $endpoint
        ]);
    }
    
    /**
     * @return void
     */
    private function requestAccessToken(): void
    {
        // build options
        $options = [
            RequestOptions::HTTP_ERRORS => true,
            RequestOptions::FORM_PARAMS => [
                'grant_type' => 'clientkey',
                'clientkey' => $this->clientKey,
            ],
            RequestOptions::HEADERS => [
                'Ocp-Apim-Subscription-Key' => $this->subscriptionKey,
            ],
        ];
        
        // make request
        $response = (new GuzzleCLient())->post(Url::AUTH->value, $options);
        
        // get contents
        $contents = $response->getBody()->getContents();
        
        // decode json
        $tokenJson = json_decode($contents);
        
        // set token
        $this->token = new Token(
            $tokenJson->access_token,
            (new DateTime())->modify("+{$tokenJson->expires_in} seconds")
        );
        
        // update token callback
        ($this->updateTokenCallback)($this->token);
    }
    
    /**
     * @return int|null
     */
    public function getLastStatusCode(): ?int
    {
        return $this->lastStatusCode;
    }
    
    /**
     * @param Method $method
     * @param string $endpoint
     * @param array $data = []
     * @param array $query = []
     * 
     * @return array|null
     */
    public function request(Method $method, string $endpoint, array $data = [], array $query = []): ?array
    {
        // check token
        if ($this->token === null or $this->token->isExpired()) {
            
            // request access token
            $this->requestAccessToken();
        }
        
        // build options
        $options = [
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::HEADERS => [
                'Content-Type' => 'application/json',
                'Ocp-Apim-Subscription-Key' => $this->subscriptionKey,
                'Authorization' => 'Bearer ' . (string) $this->token
            ],
            RequestOptions::QUERY => array_filter($query, function ($value) {
                return $value !== null; // remove null values from query
            }),
            RequestOptions::JSON => $data
        ];
        
        // make request
        $response = (new GuzzleCLient())->request($method->value, $this->getUrl($endpoint), $options);
        
        // store last status code
        $this->lastStatusCode = $response->getStatusCode();
        
        // get contents
        $contents = $response->getBody()->getContents();
        
        // decode json
        $json = json_decode($contents, true);
        
        // return json contents
        if (is_string($json)) {
            return [$json];
        }
        
        return $json;
    }
}