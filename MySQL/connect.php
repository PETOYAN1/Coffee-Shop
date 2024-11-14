<?php 
    $serverName = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'grandcoffee';

    
    try {
        $pdo = new PDO("mysql:host={$serverName};dbname=$dbname", $username, $password);
    } catch (PDOException $exception) {
        echo 'Error' . $exception->getMessage();
    }
?>