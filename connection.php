<?php

$sName = "localhost";
$uName = "root";
$pass = "root";
$db_name = "todo_list";

try { 
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(PDOexception $e) {
    echo "Connection failed : ". $e->getMessage();
}


?>