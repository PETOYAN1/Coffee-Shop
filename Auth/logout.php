<?php 
    // Log Out
    session_start();
    $director_id = $_SESSION['director_id'];
    if(isset($_GET['logout']) || !$director_id) {
        session_unset();
        session_destroy();
        header('location: ../signin/director.php');
        exit();
    }
?>