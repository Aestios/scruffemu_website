<?php
$text = file_get_contents('http://www.rpg-paradize.com/site-Dofus+English+Private+Server-107278');
$out1 = substr($text, strpos($text, 'Clic Sortant') + 15, 10);
$out2 = explode("<", $out1);
$out = $out2[0];
echo $out;
?>