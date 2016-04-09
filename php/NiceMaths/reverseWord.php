<?php
//This code read the necessary data form the standard input
while ($line = trim(fgets(STDIN))) {
  $timer = microtime(true);
  //$line contains the line of the input
  //echo $line . "\n";
  $lineArr = explode(" ", $line);
  $count = count($lineArr);
  for ($i=$count-1; $i>=0; $i--) {
    //compare with 0 is fastest
    if ($i == 0) continue;
    echo $lineArr[$i] . " ";
  }
  echo $lineArr[0] . PHP_EOL;

  echo microtime(true) - $timer . PHP_EOL;
}