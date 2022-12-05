### Criando um arquivo 
'fopen' : indicar o nome do arquivo e a maneira como esse arquivo sera aberto. Exemplo: 'fopen("clientes.txt","w"); o nome do arquivo é "clientes.txt" e a maneira como arquivo sera aberto é "w" que significa escrita.

- 'fwrite: indicar o nome do arquivo e o conteudo que sera inserido nesse arquivo. Exemplo: ' fwrite( "cliente.txt","renata"); o nome do arquivo é "cliente.txt" e o conteudo que sera inserido no arquivo é "Renata" 
- 'fclose' : indicar qual arquivo sera fechado .Exemplo: ' fclose(" Clientes. txt");

'''php
$arquivo = fopen("clientes.yvy", "w");
fwrite($arquivo, "renata");
fclose($arquivo); 
```

