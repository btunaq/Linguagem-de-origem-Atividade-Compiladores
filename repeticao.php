<?php

//Loop for 
echo "for";
for ($x = 0; $x <= 10; $x++) {
  echo "O numero e $x <br>";
}


//Loop while
echo "while";
$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}

echo "<br>";

//Loop do-while
echo "do-while";
$i = 1;
do {
  echo $i;
  $i++;
} while ($i < 6);


//Loop foreach
echo "Foreach";
$cores = array("vermelho", "verde", "azul", "amarelo");

foreach ($cores as $x) {
  echo "$x <br>";
}
