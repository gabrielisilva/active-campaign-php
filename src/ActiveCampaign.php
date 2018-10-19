<?php 

namespace ActiveCampaign;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class ActiveCampaign{

	protected $url = "";
	protected $apiKey = "";
	protected $contact;
    protected $client;
    protected $apiVersion;

	function __construct(int $version){

		if($version <= 2){
			$this->apiVersion = $version;
			$this->url = "";
			$this->client = new OldApiClient($this);
		}
        else{
        	$this->apiVersion = $version;
        	$this->client = new RestApiClient($this);
        }

		$this->contact = new Contact($this);
	
	}

	public function setApiUrl(String $url){
		$this->apiUrl = $url;
	}

	public function setApiKey(String $apiKey){
		$this->apikey = $apiKey;
	}

	public function setApiVersion(int $version){

		if($version <= 2){
			$this->client = new OldApiClient($this);
		}
        else{
        	$this->client = new RestApiClient($this);
        }

	}

	public function getApiVersion(){

		return $this->apiVersion;
	}

	public function client(){
		return $this->client;
	}

	public function getApikey(){
		return $this->apiKey;
	}

	public function baseUrl(){

		if($this->apiVersion > 2){
			return $this->url . $this->apiVersion . '/';
		}

		return $this->url;
	}

	public function contact(){
		return $this->contact;
	}

	
}