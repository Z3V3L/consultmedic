<?php

function buscar_en_medlineplus($termino_busqueda) {
  //$url = "https://api.nlm.nih.gov/searching?query=$termino_busqueda&searchfield=AllFields&format=json";
  //$url = "https://connect.medlineplus.gov/demo/service?mainSearchCriteria.v.c=195967001&mainSearchCriteria.v.cs=2.16.840.1.113883.6.96&mainSearchCriteria.v.dn=&informationRecipient.languageCode.c=es&knowledgeResponseType=application/json";
  $url = "https://connect.medlineplus.gov/service?knowledgeResponseType=application%2Fjson&mainSearchCriteria.v.cs=2.16.840.1.113883.6.90&mainSearchCriteria.v.c=e10&mainSearchCriteria.v.dn=&informationRecipient.languageCode.c=es";

https://connect.medlineplus.gov/demo/service?knowledgeResponseType=application%2Fjson&mainSearchCriteria.v.cs=2.16.840.1.113883.6.90&mainSearchCriteria.v.c=E08&mainSearchCriteria.v.dn=&informationRecipient.languageCode.c=en
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'api-key: TU_CLAVE_API'
  ));
  $response = curl_exec($ch);
  curl_close($ch);

  // Decodificar la respuesta JSON
  $data = json_decode($response, true);

  return $data;
}


// Ejemplo de uso
$resultado = buscar_en_medlineplus("dolor de cabeza");
print_r($resultado);
print_r("Nice");
