<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => getenv('URL_PATH'),
));
$resp = curl_exec($curl);
curl_close($curl);
return $resp;
