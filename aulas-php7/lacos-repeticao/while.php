<?php

// $condicao = true;

// while($condicao){
//     $numero = rand(1, 10);

//     if($numero === 8){
//         echo "OITO!";
//         $condicao = false;

//     }
//     echo $numero;
// }


$total = 100;
$desconto = 0.9;

do{

    $total *= $desconto;

}  while($total > 100);
        echo $total;
    