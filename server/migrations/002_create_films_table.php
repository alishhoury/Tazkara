<?php
require_once("./connection/connection.php");

$query = "CREATE TABLE films(
          id INT(11) AUTO_INCREMENT PRIMARY KEY,
          title VARCHAR(255) NOT NULL,
          description VARCHAR(255) NOT NULL,
          age_rating VARCHAR(10) NOT NULL,
          release_date DATE NOT NULL,
          trailer_path VARCHAR(255) NOT NULL,
          poster_path VARCHAR(255) NOT NULL,
          duration INT NOT NULL)";


$execute = $mysqli->query($query);


//php c:\xampp\htdocs\zino-cinema\server\migrations\002_create_films_table.php