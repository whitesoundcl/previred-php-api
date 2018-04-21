<?php

function get_nodos_pagina($str)
{
    $curl = curl_init();
    $url = "https://www.previred.com/web/previred/indicadores-previsionales";

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,TRUE);

    $resultado = curl_exec($curl);


    $doc = new DOMDocument();
    $doc->loadHTML($resultado);

    return $doc->getElementsByTagName($str);

}

/*
 * El índice de los nodos está determinado por la posición de la etiqueta pasada como parámetro en get_nodos_pagina()
 *
 */



// Obtener UF
function get_UF()
{
    $nodos = get_nodos_pagina("td");
    return substr($nodos->item(2)->nodeValue,2);
}

// Obtener UTM
function get_UTM()
{
    $nodos = get_nodos_pagina("td");
    return substr($nodos->item(9)->nodeValue,2);

}

// Obtener UTA
function get_UTA()
{
    $nodos = get_nodos_pagina("td");
    return substr($nodos->item(10)->nodeValue,2);
}

