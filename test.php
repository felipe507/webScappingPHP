<?php 
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';
$browser = new HttpBrowser( HttpClient::create());
$browser->setServerParameter('HTTP_USER_AGENT', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
$crawler = $browser->request('GET', 'https://pt.wikipedia.org/wiki/Wikip%C3%A9dia:Boas-vindas');

$html = $crawler->html();
//$text = $crawler->filterXPath('//h1[@class="firstHeading"]')->text();

var_dump($text);

?>