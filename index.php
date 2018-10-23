<?php

include_once 'vendor/autoload.php';



$ac = new ActiveCampaign\ActiveCampaign();



$data['contact'] = array();
$data['contact']['email'] = "felipegdfg@teste.com.br";
$data['contact']['orgname'] = "ghghjghjhg";
$data['contact']['phone'] = "teste";
$data['contact']['field[6,0]'] = "teste";
$data['contact']['tags'] = "teste";

 var_dump($ac->contact()->add($data));
