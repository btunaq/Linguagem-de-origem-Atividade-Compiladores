<?php

//If, else, elseif

$t = date("H");

if ($t < "12") {
  echo "Bom dia!!!";
}else if ($t >"12" && $t < "19"){
  echo "Boa tarde!";
}else {
  echo "Boa noite";
}


//Switch case 

$corFavorita = "roxo";

switch ($corFavorita) {
  case "roxo":
    echo "Sua cor favorita é roxo!";
    break;
  case "azul":
    echo "Sua cor favorita é azul!";
    break;
  case "rosa":
    echo "Sua cor favorita é rosa!";
    break;
  default:
    echo "nenhuma dessas cores é a sua favorita ;( ";
}


//Match

$comida = 'bolo';

$return_value = match ($comida) {
    'coxinha' => 'Essa comida é uma coxinha',
    'bolo' => 'Essa comida é um bolo',
    'batata' => 'Essa comida é uma batata',
};
var_dump($return_value);
?>
