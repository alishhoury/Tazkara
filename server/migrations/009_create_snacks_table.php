<?php
require_once("./connection/connection.php");

$query = "CREATE TABLE snacks(
          id INT AUTO_INCREMENT PRIMARY KEY,
          name VARCHAR(255) NOT NULL,
          price INT NOT NULL,
          description TEXT,
          image_url VARCHAR(255)
        )";

$execute = $mysqli->query($query);