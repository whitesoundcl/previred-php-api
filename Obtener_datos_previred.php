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

// Rentas topes imponibles:

function get_RTI_AFP()
{
    $nodos = get_nodos_pagina("td");
    return substr($nodos->item(13)->nodeValue,2);
}

function get_RTI_IPS()
{
    $nodos = get_nodos_pagina("td");
    return substr($nodos->item(15)->nodeValue,2);
}

function get_RTI_seguro_cesantia()
{
    $nodos = get_nodos_pagina("td");
    return substr($nodos->item(17)->nodeValue,2);
}

// Rentas mínimas imponibles
function get_RMI_dependientes_independientes()
{
    $nodos = get_nodos_pagina("td");
    return substr($nodos->item(20)->nodeValue,2);
}

function get_RMI_menores_mayores()
{
    $nodos = get_nodos_pagina("td");
    return substr($nodos->item(22)->nodeValue,2);
}

function get_RMI_casa_particular()
{
    $nodos = get_nodos_pagina("td");
    return substr($nodos->item(24)->nodeValue,2);
}

function get_RMI_fines_no_remuneracionales()
{
    $nodos = get_nodos_pagina("td");
    return substr($nodos->item(26)->nodeValue,2);
}

// ahorro previsional voluntario

function get_APV_mensual()
{
    $nodos = get_nodos_pagina("td");
    return substr($nodos->item(29)->nodeValue,2);
}

function get_APV_anual()
{
    $nodos = get_nodos_pagina("td");
    return substr($nodos->item(31)->nodeValue,2);
}

// DEPÓSITO CONVENIDO
function get_deposito_convenido()
{
    $nodos = get_nodos_pagina("td");
    return substr($nodos->item(34)->nodeValue,2);
}

// Seguro de cesantia (AFC)
function get_AFC_indefinido(){}
function get_AFC_indefinido_empleador(){}

function get_AFC_fijo(){}

function get_AFC_indefinido_mas(){}

// AFP - TASA TRABAJADORES

function get_tasa_AFP_DEP_capital(){}
function get_tasa_AFP_INDEP_capital(){}
function get_tasa_AFP_DEP_cuprum(){}
function get_tasa_AFP_INDEP_cuprum(){}
function get_tasa_AFP_DEP_habitat(){}
function get_tasa_AFP_INDEP_habitat(){}
function get_tasa_AFP_DEP_planvital(){}
function get_tasa_AFP_INDEP_planvital(){}
function get_tasa_AFP_DEP_provida(){}
function get_tasa_AFP_INDEP_provida(){}
function get_tasa_AFP_DEP_modelo(){}
function get_tasa_AFP_INDEP_modelo(){}

// 