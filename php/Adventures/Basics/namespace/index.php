<?php
/**
 * Date: 7/8/15
 * Time: 11:02 AM
 * @property index.php $index.php
 */
require 'ThangTdFoo.php';
require 'ThangTdBar.php';
require 'subNamespace/RealBar.php';
require 'subNamespace/RealFoo.php';

$a = new Thangtd\ThangTdFoo();
$b = new Thangtd\ThangTdBar();
$c = new Thangtd\SubThangTd\RealFoo();
$d = new Thangtd\SubThangTd\RealBar();

