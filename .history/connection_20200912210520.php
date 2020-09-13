<?php

require __DIR__.'/vendor/autoload.php';

interface Db {
    public function connect($servidor, $nome, $usuario, $senha);
}

class Mysql implements Db {
    public function connect($servidor, $nome, $usuario, $senha) {
        echo 'conecta com mysql';
    }
}

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