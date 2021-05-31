<?php
//(PHP_SAPI !== 'cli' || isset($_SERVER['HTTP_USER_AGENT'])) &&  header('Location: /');;
function elapsed_time($timestamp, $precision = 2) {
  $time = time() - $timestamp;
  $a = array( ' ans' => 31557600, ' mois' => 2629800, ' semaines' => 604800, ' jours' => 86400, ' heures' => 3600, ' min' => 60, 'sec' => 1);
  $i = 0;
  foreach($a as $k => $v) {
    $$k = floor($time/$v);
    if ($$k) $i++;
    $time = $i >= $precision ? 0 : $time - $$k * $v;
    $$k = $$k ? $$k.''.$k.' ' : '';
    @$result .= $$k;
  }
  return $result;
}
$age = elapsed_time('827791800', 6);
require_once('TwitterAPIExchange.php');
$settings = array(
    'oauth_access_token' => "891185779-2AbCInBcrdbDKy30qzfCMKn2oimngbW0lrR04qWH",
    'oauth_access_token_secret' => "0tC0U4VjEP9o9VTm9vUGcJxPsNVqUjQ22h7ByO4yV3Vdn",
    'consumer_key' => "EhQefzsu591vDSdYdoMp1oQlk",
    'consumer_secret' => "0G7REeleogVIFpezCE4Okdzr8aVL6GH0tPoMXA84oNqgIAu6fx"
);

$url = 'https://api.twitter.com/1.1/account/update_profile.json';
$requestMethod = 'POST';

$postfields = array(
    'description' => 'Uptime: '.$age.' | Hacker et dev a mes heures perdu... PP and banner by @Alex_Bgard', 
    'skip_status' => '1'
);

$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
    ->setPostfields($postfields)
    ->performRequest();

    /*
    Ninja des Internets depuis 2002 😅
Hacker et dev a mes heures perdu...
Bosse comme SysAdmin pour 
@florianbrotte

PP and banner by 
@Alex_Bgard
*/
?>