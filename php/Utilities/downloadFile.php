<?php
/**
 * Date: 9/1/15
 * Time: 10:54 AM
 * @property downloadFile.php $downloadFile.php
 */
$targetFolder = __DIR__ . '/Download/';
if (isset($argv[1])) {
  $targetFolder = $argv[1];
}

$root = $argv[2];
$sourceUrls = ['1/', '2/', '4/', '131/', '1100000001/'];

function getContent($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_BINARYTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_SSLVERSION,3);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
  $content = curl_exec($ch);
  curl_close($ch);
  return $content;
}

function download($root, $sourceUrls, $targetFolder) {
  foreach ($sourceUrls as $sourceUrl) {
    if (!is_dir($targetFolder . $sourceUrl)) {
      mkdir($targetFolder . $sourceUrl);
    }
    $abUrl = $root . $sourceUrl;
    echo '...getting http response for ' . $sourceUrl . '...';
    $content = getContent($abUrl);
    echo 'done' . PHP_EOL;
    echo '...extracting/regrex content...';
    preg_match_all('~<a href=\"(.*?[\.jpg|\.gif|\.png])\"~', $content, $matches);
    echo 'done. ' . PHP_EOL;
    echo '...get and save files... ';
    foreach ($matches[1] as $fileName) {
      if (!is_file($abUrl . $fileName)) {
        echo '...get and copy file: ' . $fileName;
        $fileBuffer = getContent($abUrl.$fileName);
        file_put_contents($targetFolder . $sourceUrl . $fileName, $fileBuffer);
        echo '...done.' . PHP_EOL;
      }
    }
    echo '...done.' . PHP_EOL;
  }
}
download($root, $sourceUrls, $targetFolder);
if (!is_dir($targetFolder . 'thumbnails')) {
  mkdir($targetFolder . 'thumbnails');
}
download($root . 'thumbnails/', $sourceUrls, $targetFolder . 'thumbnails');

echo 'done. Congratulations !';