<?php

//Escopos

$nome = "Alex";

function teste(){
    global $nome;
    echo $nome;
}

function teste2(){
    $nome = "João";
    echo $nome;
}

