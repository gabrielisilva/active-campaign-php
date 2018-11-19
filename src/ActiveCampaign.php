<?php 

namespace ActiveCampaign;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class ActiveCampaign{

	protected $url = "https://involves.api-us1.com";
	protected $apiKey = "60505754613f8e86af8ab233a866e16ee6ce6caee1938d055c56294644c5c80072636fc4";
	protected $contact;
    protected $client;
    protected $apiVersion;

	function __construct(){

        $this->setApiVersion(1);
		$this->contact = new Contact($this);
	
	}

	public function setApiUrl(String $url){
		$this->url = $url;
	}

	public function setApiKey(String $apiKey){
		$this->apiKey = $apiKey;
	}

	public function setApiVersion(int $version){

		if($version == 1){
			$this->client = new OldApiClient($this);
		}
        else{
        	$this->client = new RestApiClient($this);
        }

        $this->apiVersion = $version;

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

		if($this->apiVersion == 1){
			return $this->url;
		}

    	return $this->url . '/' . $this->apiVersion . '/';
	}

	public function contact(){
		return $this->contact;
	}

}