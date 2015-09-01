<?php
require_once __DIR__ . '/../vendor/autoload.php';
$hideMyAssApi = new \HideMyAssAPI\HideMyAssAPI();
/** @var \HideMyAssAPI\Proxy[] $proxyList */
$proxyList = $hideMyAssApi->getProxy();
$firstProxy = $proxyList[0];

$multi_curl = new \Curl\MultiCurl();
//$multi_curl->setOpt(CURLOPT_NOBODY,true);
//$multi_curl->setOpt(CURLOPT_FILETIME,true);
$multi_curl->success(function($instance) {
    echo '<li>call to "' . $instance->url . '" was successful.' . "</li>";
    echo '<li>response: ' . $instance->response . "</li>";
});
$multi_curl->error(function($instance) {
    echo '<li>call to "' . $instance->url . '" was unsuccessful.' . "</li>";
    echo '<li>error code: ' . $instance->errorCode . "</li>";
    echo '<li>error message: ' . $instance->errorMessage . "</li>";
});

$multi_curl->complete(function($instance) {
    echo '<li>call completed</li>';
});

$multi_curl->addGet('https://downloads.wordpress.org/plugin/wp-basketjs.zip');

$multi_curl->setOpt(CURLOPT_PROXY, $firstProxy->toString());
$multi_curl->setOpt(CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
$multi_curl->start();