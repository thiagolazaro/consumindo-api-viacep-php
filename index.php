<?php

require __DIR__.'/vendor/autoload.php';
use App\WebService\ViaCEP;

// Verifica a existência do cep no comando
if (!isset($argv[1]))
{
  die("CEP não definido\n");
}

$dados = ViaCEP::consultaCEP($argv[1]);
print_r($dados);