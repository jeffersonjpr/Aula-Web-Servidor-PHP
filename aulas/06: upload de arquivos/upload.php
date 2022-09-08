<?php
echo '<pre>';
$file_names = $_FILES['utfpr']['tmp_name'];

foreach ($file_names as $file_name) {
    $nome = md5($file_name);
    move_uploaded_file($file_name, "tmp/$nome");
}

echo 'Arquivos enviados com sucesso!';

#open every file inside tmp folder
foreach (glob("tmp/*") as $filename) {
    #read the file
    $file = file_get_contents($filename);
    #print the file
    print($file);
    print_r($file);
}