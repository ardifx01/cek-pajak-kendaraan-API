<?php

$nopol = 'ab0000xy';
$url = 'https://cekpajak.bystpn.web.id/api/diy/' . $nopol;

$data = file_get_contents($url);

echo $data;
