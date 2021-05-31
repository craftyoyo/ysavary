<?php
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
echo elapsed_time('827791800', 6);
