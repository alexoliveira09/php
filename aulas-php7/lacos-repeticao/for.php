<?php

//  for ($i = 0; $i <= 10; $i++){
//     echo $i,"<br>";
// }

// for ($i = 0; $i <= 100; $i+= 5){
//     echo $i."<br>";
// }

for ($i = 0; $i <= 1000; $i+= 5){

    if($i > 200 && $i < 800) continue;
    
    echo $i."<br>";
}

/** CUIDADO LOOP INFINITO */

// for ($i = 0; $i <= 1000; $i--){
//     echo $i."<br>";
// }