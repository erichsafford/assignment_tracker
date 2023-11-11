<?php
    $dsn = 'mysql:host=localhost;dbname=assignment_tracker';
    $username = 'root';
    //$password = 'password'

    try {
        $db = new PDO($dsn, $username);
    } catch (PDOException $err) {
        $error = "Database Error: ";
        $error .= $err->getMessage();
        include('view/error.php');
        exit();
    }