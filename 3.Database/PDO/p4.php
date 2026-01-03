<?php
$dsn ="sqlite:country.db";#Dsn means Data Source Name
try{
    $pdo = new PDO($dsn);
    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);# Enable exceptions for errors

}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
};