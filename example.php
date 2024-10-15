<?php

$nopol = 'ab0000xy';
$url = 'https://cekpajak.stpn.xyz/api/v1/diy/' . $nopol;

$data = file_get_contents($url);

echo $data;
