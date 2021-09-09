<?php

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\BrowserKit\HttpBrowser;

require 'vendor/autoload.php';


$browser = new HttpBrowser(HttpClient::create());

$crawler = $browser->request('GET','https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/');


$html = $crawler->html();

$login = $browser->clickLink('Login');


var_dump($login->html());