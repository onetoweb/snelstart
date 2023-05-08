<?php

namespace Onetoweb\Snelstart;

use GuzzleHttp\RequestOptions;
use GuzzleHttp\Client as GuzzleCLient;
use Onetoweb\Snelstart\Token;
use Onetoweb\Snelstart\Endpoint;
use DateTime;

/**
 * Snelstart Api Client.
 */
class Client
{
    /**
     * Base Urls.
     */
    public const BASE_URL = 'https://b2bapi.snelstart.nl';
    public const AUTH_URL = 'https://auth.snelstart.nl/b2b/token';
    
    /**
     * Version
     */
    public const VERSION = 2;
    
    /**
     * Methods.
     */
    public const METHOD_GET = 'GET';
    public const METHOD_POST = 'POST';
    public const METHOD_PUT = 'PUT';
    public const METHOD_DELETE = 'DELETE';
    public const METHOD_HEAD = 'HEAD';
    
    /**
     * @var string
     */
    private $clientKey;
    
    /**
     * @var string
     */
    private $subscriptionKey;
    
    /**
     * @var string
     */
    private $version;
    
    /**
     * @var Token
     */
    private $token;
    
    /**
     * @var callable
     */
    private $updateTokenCallback;
    
    /**
     * @var int
     */
    private $lastStatusCode;
    
    /**
     * @param string $clientKey
     * @param string $subscriptionKey
     * @param int $version = self::VERSION
     */
    public function __construct(string $clientKey, string $subscriptionKey, int $version = self::VERSION)
    {
        $this->clientKey = $clientKey;
        $this->subscriptionKey = $subscriptionKey;
        $this->version = $version;
        
        // load endpoints
        $this->loadEndpoints();
    }
    
    /**
     * @return void
     */
    private function loadEndpoints(): void
    {
        $this->actionprice = new Endpoint\Actionprice($this);
        $this->article = new Endpoint\Article($this);
        $this->itemDepartment = new Endpoint\ItemDepartment($this);
        $this->authorization = new Endpoint\Authorization($this);
        $this->bankStatementFile = new Endpoint\BankStatementFile($this);
        $this->bankEntry = new Endpoint\BankEntry($this);
        $this->vatDeclaration = new Endpoint\VatDeclaration($this);
        $this->vatRate = new Endpoint\VatRate($this);
        $this->companyInfo = new Endpoint\CompanyInfo($this);
        $this->journal = new Endpoint\Journal($this);
        $this->document = new Endpoint\Document($this);
        $this->echoTest = new Endpoint\EchoTest($this);
        $this->generalLedger = new Endpoint\GeneralLedger($this);
        $this->generalLedgerMutation = new Endpoint\GeneralLedgerMutation($this);
        $this->purchaseEntry = new Endpoint\PurchaseEntry($this);
        $this->purchaseInvoice = new Endpoint\PurchaseInvoice($this);
        $this->cashEntry = new Endpoint\CashEntry($this);
        $this->costCentre = new Endpoint\CostCentre($this);
        $this->country = new Endpoint\Country($this);
        $this->journalEntry = new Endpoint\JournalEntry($this);
        $this->quotation = new Endpoint\Quotation($this);
        $this->priceAgreement = new Endpoint\PriceAgreement($this);
        $this->report = new Endpoint\Report($this);
        $this->relation = new Endpoint\Relation($this);
        $this->vatRateDefinition = new Endpoint\VatRateDefinition($this);
        $this->vatRateIntl = new Endpoint\VatRateIntl($this);
        $this->saleEntry = new Endpoint\SaleEntry($this);
        $this->saleInvoice = new Endpoint\SaleInvoice($this);
        $this->saleOrder = new Endpoint\SaleOrder($this);
        $this->saleOrderTemplate = new Endpoint\SaleOrderTemplate($this);
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
        return $this->request(self::METHOD_GET, $endpoint, [], $query);
    }
    
    /**
     * @param string $endpoint
     * @param array $data
     * 
     * @return array|null
     */
    public function post(string $endpoint, array $data): ?array
    {
        return $this->request(self::METHOD_POST, $endpoint, $data);
    }
    
    /**
     * @param string $endpoint
     * @param array $data
     * 
     * @return array|null
     */
    public function put(string $endpoint, array $data): ?array
    {
        return $this->request(self::METHOD_PUT, $endpoint, $data);
    }
    
    /**
     * @param string $endpoint
     * 
     * @return bool
     */
    public function delete(string $endpoint): bool
    {
        $this->request(self::METHOD_DELETE, $endpoint);
        
        return $this->lastStatusCode === 200;
    }
    
    /**
     * @param string $endpoint
     * 
     * @return array
     */
    public function head(string $endpoint): array
    {
        return $this->request(self::METHOD_HEAD, $endpoint);
    }
    
    /**
     * @param string $endpoint
     *
     * @return string
     */
    public function getUrl(string $endpoint): string
    {
        return implode('/', [
            self::BASE_URL,
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
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::FORM_PARAMS => [
                'grant_type' => 'clientkey',
                'clientkey' => $this->clientKey,
            ],
            RequestOptions::HEADERS => [
                'Ocp-Apim-Subscription-Key' => $this->subscriptionKey,
            ],
        ];
        
        // make request
        $response = (new GuzzleCLient())->request(self::METHOD_POST, self::AUTH_URL, $options);
        
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
     * @param string $method
     * @param string $endpoint
     * @param array $data = []
     * @param array $query = []
     * 
     * @return array|null
     */
    public function request(string $method, string $endpoint, array $data = [], array $query = []): ?array
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
        $response = (new GuzzleCLient())->request($method, $this->getUrl($endpoint), $options);
        
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