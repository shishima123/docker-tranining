<?php
ini_set('memory_limit', '-1');
$path = './storage/log3.txt';

if (file_exists($path)) {
    unlink($path);
}

// open file for writing
$file = fopen($path, 'w')or die("Unable to open file!");
for ($i = 2001; $i <= 3000; $i++) {
    fwrite($file, $i . "\n");
}
// close the file
fclose($file);

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => getenv('URL_PATH'),
));
$resp = curl_exec($curl);
curl_close($curl);
return $resp;