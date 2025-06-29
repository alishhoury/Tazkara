<?php
require_once("./connection/connection.php");

$query = "CREATE TABLE genres (
          id INT PRIMARY KEY AUTO_INCREMENT,
          name VARCHAR(20) NOT NULL UNIQUE)";

$execute = $mysqli->query($query);

//php C:\xampp\htdocs\zino-cinema\server\migrations\003_create_genres_table.php