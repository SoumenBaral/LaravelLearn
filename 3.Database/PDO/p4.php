<?php
$dsn ="sqlite:country.db";#Dsn means Data Source Name
try{
    $pdo = new PDO($dsn);
    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);# Enable exceptions for errors

      // Create table
    $sql = "
        CREATE TABLE IF NOT EXISTS countries (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name VARCHAR(100) NOT NULL UNIQUE,
            capital VARCHAR(100) NOT NULL,
            continent VARCHAR(100) NOT NULL,
            population INTEGER NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ";
    $pdo->exec($sql);
    $pdo->exec("DELETE FROM countries"); // Clear existing data
    $statement = $pdo->prepare("INSERT INTO countries (name, capital, continent, population) VALUES (?, ?, ?, ?)");
    $files = fopen("countries.csv", "r");
    $row = fgetcsv($files); // Skip header row

    $pdo ->beginTransaction();
    while (($row = fgetcsv($files)) !== false) {
        $statement->execute([$row[0], $row[1], $row[2], $row[3]]);
    }
    $pdo->commit();
    fclose($files);


    // $file = fopen("countries.csv", "r");
    // $row = fgetcsv($file); // Skip header row
    // print_r($row);
    // $row = fgetcsv($file); // Skip header row
    // print_r($row);



}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
};