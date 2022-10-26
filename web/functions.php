<?php

function connectDb()
{
    $param = "mysql:dbname=" . DB_NAME . ";host=" . DB_HOST;

    try {
        $pdo = new PDO($param, DB_USER_NAME, DB_PASSWORD);
        $pdo->query('SET NAMES utf8;');

        return $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();

        exit;
    }
}
