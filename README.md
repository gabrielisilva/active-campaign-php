# active-campaign-php

PHP Client for Active Campaign
Support API Rest v3 and V1 (No rest)


## Install

> composer install


## Usage

> Add Lead

```
<?php 

$data['contact']['email'] = 'test@test.com.br';
$data['contact']['org'] = 'test';
$data['contact']['2'] = 'test@test.com.br';

 $ac = new ActiveCampaign();
 $ac->setApiVersion(3);
 $ac->setApiKey('*');
 $ac->setApiUrl('*')
 $ac->insertLead($data);
 
```
 
 




