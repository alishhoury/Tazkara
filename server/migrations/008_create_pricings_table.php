<?php
require_once("./connection/connection.php");
$query = "CREATE TABLE pricings(
          id INT AUTO_INCREMENT PRIMARY KEY,
          film_id INT NOT NULL,
          peak_hours INT,
          price INT NOT NULL,
          FOREIGN KEY (film_id) REFERENCES films(id) ON DELETE CASCADE
          )";
$execute = $mysqli->query($query);