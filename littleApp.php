<?php
echo "<h2>Simple Twitter API Test</h2>";

require_once('TwitterAPIExchange.php');
 
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "979190815-DvcNMrigbUDP9XwVVmcT8S7dRib7I1uHC9BPaxxk",
    'oauth_access_token_secret' => "mq3BoRjDQMfEwlH1xTnDBNQ0oyneaTxKzSDEktmfuVvne",
    'consumer_key' => "teKe5kvAkJXEWfmS7GNIjjsTp",
    'consumer_secret' => "n72vFihhaiTDkvaQX4KHeqqTrFVsxi7o93nlm7GGLW8eQ6u980"
);

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

$requestMethod = "GET";

$getfield = '?screen_name=iagdotme&count=20';

$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
?>