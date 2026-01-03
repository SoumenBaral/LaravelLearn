<?php
$dsn ="sqlite:data.db";#Dsn means Data Source Name
$mysqlDsn ="mysql:host=localhost;dbname=testdb;charset=utf8mb4";
$pgsqlDsn ="pgsql:host=localhost;port=5432;dbname=testdb;user=yourusername;password=yourpassword";


try{
    $pdo = new PDO($dsn);
    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql ="CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        gender VARCHAR(10) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $pdo->exec($sql);
    $users = [
        ['name' => 'Alice', 'email' => 'alice@example.com', 'gender' => 'Female'],
        ['name' => 'Bob', 'email' => 'bob@example.com', 'gender' => 'Male'],
        ['name' => 'Charlie', 'email' => 'charlie@example.com', 'gender' => 'Male'],
        ['name' => 'Diana', 'email' => 'diana@example.com', 'gender' => 'Female'],
        ['name' => 'Eve', 'email' => 'eve@example.com', 'gender' => 'Female']
];
    $pdo->exec("INSERT INTO users (name, email, gender) VALUES ('Alice', 'alice@example.com', 'Female')");
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
};
