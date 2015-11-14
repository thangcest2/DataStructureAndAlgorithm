<?php
/**
 * Date: 8/30/15
 * Time: 12:10 PM
 * @property Regex.php $Regex.php
 */

//$subject = 'aaa2ssss';
//$pattern = '/^aaa[a-z0-9]+$/';

$subject = 'http://php.net/manual/en/reference.pcre.pattern.modifiers.php';
$pattern = "/^http(s|):\/\/(.*?)reference/";

$callback = function($found) {
  var_dump($found);die;
  $found[2] = 'thangtd';
  return $found[2];
};

$a = preg_replace($pattern, '${1}https://google.com.${2}thangtd', $subject);
//$aa = preg_replace_callback($pattern, $callback, $subject);

var_dump($a);
//var_dump($aa);
