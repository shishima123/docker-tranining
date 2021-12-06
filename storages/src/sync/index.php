<?php
ini_set('memory_limit', '-1');
$data1 = file_get_contents("./storage/app_1/log1.txt");
$data2 = file_get_contents("./storage/app_2/log2.txt");
$data3 = file_get_contents("./storage/app_3/log3.txt");
$data = $data1 . $data2 . $data3;
for ($i = 1; $i <= 3; $i++) {
    $open = fopen("./storage/app_$i/log.txt", "w");
    fwrite ($open, $data);
    fclose ($open);
}

echo 'successfully';