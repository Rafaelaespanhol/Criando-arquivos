<?php
$arquivo = fopen("clientes.txt","r");
echo fread($arquivo, filesize("clientes.txt"));
fclose($arquivo);

?>