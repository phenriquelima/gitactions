<?php


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $file = 'people.txt';
    // Abre o arquivo para obter o conteúdo existente
    $current = file_get_contents($file);
    // Acrescenta a nova pessoa no arquivo
    $current .= "Nova requisição POST em ".Date('d/m/Y H:i:s')."\n";
    // Escreve o conteúdo de volta no arquivo
    file_put_contents($file, $current);

    echo "Arquivo criado e preenchido!";
}
