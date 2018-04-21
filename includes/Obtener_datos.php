<?php






function get_nodos_pagina()
{
    $curl = curl_init();
    $url = "https://www.previred.com/web/previred/indicadores-previsionales";

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,TRUE);

    $resultado = curl_exec($curl);


    $doc = new DOMDocument();
    $doc->loadHTML($resultado);

    return $doc->getElementsByTagName("td");

}

// Obtener el UF
function get_UF()
{
    $nodos = get_nodos_pagina();

    $contador = 0;
    foreach ($nodos as $nodo)
    {
        if($contador == 2){ // El UF se encuentra en el td 2.
            echo substr($nodo->nodeValue, 2);
            return;
        }
        $contador++;

    }
}

