<?php
require_once("./connection/connection.php");

$query = "CREATE Table users(
          id INT(11) AUTO_INCREMENT PRIMARY KEY,
          username VARCHAR(255) NOT NULL,
          password VARCHAR(255) NOT NULL,
          email VARCHAR(255) NOT NULL,
          mobile INT(20) NOT NULL)";


$mysqli->query($query);
          
//php c:\xampp\htdocs\zino-cinema\server\migrations\001_create_users_table.php