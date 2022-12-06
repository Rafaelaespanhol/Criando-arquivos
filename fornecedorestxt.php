<?php

$arquivo = fopen("fornecedores.txt","w");

$listaClientes = [
    [
        "name" => "Constance Alford",
        "email" => "lacinia.sed@yahoo.com",
        "country" => "United States"
    ],
    [
        "name" => "Ariana Jacobs",
        "email" => "non.feugiat@aol.ca",
        "country" => "Canada"
    ],
    [
        "name" => "Cade Wheeler",
        "email" => "egestas@protonmail.org",
        "country" => "Philippines"
    ],
    [
        "name" => "Hayes Greene",
        "email" => "sed.nunc.est@icloud.edu",
        "country" => "Norway"
    ],
    [
        "name" => "Quinlan Brock",
        "email" => "ac.sem@hotmail.net",
        "country" => "Vietnam"
    ]
];
for($i=0; $i<count($listaClientes); $i++){
    fwrite($arquivo, $listaClientes[$i]["name"] . "\n");
    fwrite($arquivo, $listaClientes[$i]["email"] . "\n");
    fwrite($arquivo, $listaClientes[$i]["country"] . "\n");
}

fclose($arquivo);
?>

<table border=2>
    <thead>
        <tr>
            <th>Nome  Idade  email</th>
</tr>
</thead>
<tbody>
<?php
$nomearquivo = "fornecedores.txt";
$arquivo = fopen($nomearquivo,"r");
while(!feof($arquivo)){
    $linha = fgets($arquivo, 100);
    echo "<tr>";
    echo "<td>$linha</td>";
    echo"</tr>";
}

fclose($arquivo);
?>
</tbody>
</table>
