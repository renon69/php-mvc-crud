<?php

    $dsn = 'mysql:host=localhost;dbname=world';
    $username = 'root';

    try {
        $db = new PDO($dsn, $username);
    }
    catch(PDOException $e) {
        $error_message = 'database error: ';
        $error_message .= $e->getMessage();
        include('view/error.php');
        exit();
    }
?>