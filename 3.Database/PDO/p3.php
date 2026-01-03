<?php
$dsn ='sqlite:data.db';#Dsn means Data Source Name
$sql ="SELECT * FROM users WHERE id<=?";
$sql ="SELECT * FROM users WHERE id BETWEEN ? AND ?";
try{
    $pdo = new PDO($dsn);
    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $pdo->prepare($sql);
    $statement->execute([6,10]);
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
   print_r($users);
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
};