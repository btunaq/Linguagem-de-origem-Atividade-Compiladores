<?php
//Break
echo "Break";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "O numero é: $x <br>";
}


//continue 
echo "Continue";
for ($x = 0; $x < 8; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "O numero é: $x <br>";
}

//Desvio de fluxo: goto
echo "GoTo";
for ($i = 0; $i < 10; $i++) {
    if ($i == 3) {
        goto fim;
    }
}

fim:
echo "O loop foi interrompido no número 3.";
?>