<?php

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\BrowserKit\HttpBrowser;

require 'vendor/autoload.php';


$browser = new HttpBrowser(HttpClient::create());
$browser->request('GET','https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/');
//$browser->setServerParameter(['HTTP_USER_AGENT', '']);

$browser->clickLink('Login');

$crawller = $browser->submitForm('Go',[
    'username' =>  'vitor@php.rio',
    'password' =>  'uma senha muito secreta'
], 'GET');

print_r($browser->getRequest());