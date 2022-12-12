<?php

$nopol = 'ab0000xy';
$url = 'https://pkb.stpn.eu.org/api/v1/diy?nopol=' . $nopol;

$data = file_get_contents($url);

echo $data;
