<?php

$arquivo = fopen("tmp/escrita.txt", "w");
fwrite($arquivo, "Olá, musndo!");
fclose($arquivo);