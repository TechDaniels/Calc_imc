<?php
    $altura = $_GET["altura"];
    $peso = $_GET["peso"];
$imc = $peso / ($altura ** 2);
$dicionario = [
    17.0 =>   "Muito abaixo do peso",
    18.49 =>  "Abaixo do peso",
    24.99 =>   "Peso normal",
    29.99 => "Acima do peso",
    34.99 => "Obesidade 1",
    39.99 => "Obesidade 2",
    40.0 => "Obesidade 3"
    24.99 =>  "Peso normal",
    29.99 =>  "Acima do peso",
    34.99 =>  "Obesidade 1",
    39.99 =>  "Obesidade 2",
    40.0 =>   "Obesidade 3"
];

foreach($dicionario as $key => $value){
@@ -25,4 +25,4 @@
        echo PHP_EOL."$value";
    }
}
?>
