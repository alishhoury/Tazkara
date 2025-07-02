<?php
require_once("./connection/connection.php");

$query = "CREATE TABLE auditoriums(
          id INT AUTO_INCREMENT PRIMARY KEY,
          name VARCHAR(255) NOT NULL
          total_rows INT NOT NULL,
          total_columns INT NOT NULL,
          total_seats INT NOT NULL,)";

$execute = $mysqli->query($query);