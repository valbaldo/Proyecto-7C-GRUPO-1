<?php
$user = 'root';
$pass = '';
$host = 'localhost';
$database = 'proyecto';

try{ 
    $conn = new PDO("mysql:host=".$host.";dbname=".$database, $user, $pass);
}
catch (PDOException $e){
    exit("Error: " . $e->getMessage());
}

?>