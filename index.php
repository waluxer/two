<?php

require "vendor/electrolinux/phpquery/phpQuery/phpQuery.php";

$ch = curl_init("https://texmart.kg/new-design/catalog?type=product");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$html = curl_exec($ch);
curl_close($ch);

$pq = phpQuery::newDocument($html);
$text = $pq("h6") -> html();
echo $text

?>