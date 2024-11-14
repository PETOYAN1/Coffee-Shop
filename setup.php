<?php 

    // Instruction Create Database

    $createDb = file_get_contents('MySQL/database.sql');
    $serverName = 'localhost';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($serverName,$username,$password);
    $sql = mysqli_multi_query($conn, $createDb);
    
    if (!$conn) {
        die('Error DB ' . mysqli_connect_error());
    } else {
        if(!$sql) {
            exit('Error' . mysqli_connect_error());
        } else {
            header('location: index.php');
        }
    }
?>