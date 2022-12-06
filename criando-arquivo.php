<?php

$arquivo = fopen("clientes.txt","w");

$listaClientes = [
    [
        "nome" => "Guto",
        "idade" => 36
    ],
    [
        "nome" => "Renata",
        "idade" => 30
    ],
    [ 
        "nome" => "Rafaela",
        "idade" => 24
    ],
    [
        "nome" => "Paulo",
        "idade" => 46
    ],

];
for($i=0; $i<count($listaClientes); $i++){
    fwrite($arquivo, $listaClientes[$i]["nome"] . "\t");
    fwrite($arquivo, $listaClientes[$i]["idade"] . "\n");
}

fclose($arquivo);
?>

