<?php

namespace App\WebService;

class ViaCEP 
{
  /**
   * Método responsável por consultar um CEP no Webservice ViaCEP
   * @param string $cep
   * @return array
   */
  public static function consultaCEP($cep)
  {
    // Inicia o CURL
    $curl = curl_init();

    // Configurações do CURL
    curl_setopt_array($curl, [
      CURLOPT_URL => 'https://viacep.com.br/ws/'.$cep.'/json/',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_CUSTOMREQUEST => 'GET'
    ]);

    // Response
    $response = curl_exec($curl);
    
    // Fecha a conexão
    curl_close($curl);
    
    // Convert o Json para array
    $array = json_decode($response, true);

    // retorna o conteudo em array    
    return isset($array['cep']) ? $array : null;
  }  
}