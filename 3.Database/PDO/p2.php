<?php
$dsn ='sqlite:data.db';#Dsn means Data Source Name
$sql ="SELECT * FROM users";
try{
    $pdo = new PDO($dsn);
    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $pdo->query($sql);
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
   print_r($users);
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
};