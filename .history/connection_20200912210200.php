<?php

require __DIR__.'/vendor/autoload.php';

class Connection {
    public function __construct($servidor, $nome, $usuario, $senha) {

    }
    public function connect(string $db) {
        if ($db == 'mysql') {
            echo 'conecta com mysql';
        } else if ($db == 'sqlite') {
            echo 'conecta com sqlite';
        }
    }
}

$conn = new Connection('localhost', 'curso_solid', 'root', '1234');
$conn->connect('mysql');