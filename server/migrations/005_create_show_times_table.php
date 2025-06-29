<?php
$connection = require_once("./connection/connection.php");

$query = "CREATE TABLE show_times(
          id INT(11) AUTO_INCREMENT PRIMARY KEY,
          film_id INT,
          auditerium_id INT,
          start_time INT NOT NULL;
          end_time INT NOT NULL,
          FOREIGN KEY (film_id) REFERENCES films(id) ON DELETE CASCADE,
          FOREIGN KEY (auditerium_id) REFERENCES Auditeriums(id) ON DELETE CASCADE,
          )";

$execute = $mysqli->query($query);

//php C:\xampp\htdocs\zino-cinema\server\migrations\005_create_show_times_table.php