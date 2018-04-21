<?php
/**
 * Created by PhpStorm.
 * User: whitesound
 * Date: 21-04-18
 * Time: 18:06
 */

$curl = curl_init();
$url = "https://www.previred.com/web/previred/indicadores-previsionales";

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,TRUE);

$resultado = curl_exec($curl);


$doc = new DOMDocument();
$doc->loadHTML($resultado);
$selector = new DOMXPath($doc);

$links = $doc->getElementsByTagName("td");
echo "OBTENIENDO LISTA DE ELEMENTOS:";
foreach ($links as $link)
{
    echo $link->nodeValue, PHP_EOL;
}

