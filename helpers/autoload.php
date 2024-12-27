<?php
spl_autoload_register(function ($class) {
    // Define o diretório base do projeto
    $base_dir = dirname(__FILE__, 2) . '/';

    // Exibe o diretório base
    echo "Diretório base: " . $base_dir . "<br>";

    // Converte o namespace da classe em caminho de arquivo
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';

    // Verifica se o arquivo existe antes de incluí-lo
    if (file_exists($file)) {
        return require $file;
    }

    die("Erro! Não existe a classe {$class}");
});
