<?php

include_once 'ProximaCentauri.php';
include_once 'Matahari.php';
include_once 'Bumi.php';

$bendaLangit1 = new ProximaCentauri('0.1221', 'merah');

echo $bendaLangit1->getInfo();

$matahari = new Matahari();
echo "<h2> Rotasi Matahari:</h2>";
$matahari->berotasi();
echo "<br>";
echo "<h2> Evolusi Matahari:</h2>";
$matahari->berevolusi();

$bumi = new Bumi();
echo "<h2> Rotasi Bumi:</h2>";
$bumi->berotasi();
echo "<br>";
echo "<h2> Evolusi Bumi:</h2>";
$bumi->berevolusi();
