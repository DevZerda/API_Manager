<?php

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected succesfully";
} catch(PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
}

//$db = new mysqli("", "", "", "");