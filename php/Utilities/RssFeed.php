<?php
/**
 * Date: 8/30/15
 * Time: 8:46 PM
 * @property RssFeed.php $RssFeed.php
 */


/**
 * Hello Thang
 *
 * @param string $feedUrl
 * @param string $hello
 * @return void
 */
function getRssFeed($feedUrl = '', $hello = "") {
  $feedUrl = 'http://feeds.feedburner.com/themeforest?format=xml';
  $content = file_get_contents($feedUrl);
  $res = new SimpleXmlElement($content);
  var_dump($res);die;

}
