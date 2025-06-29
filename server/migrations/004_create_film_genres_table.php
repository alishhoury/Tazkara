<?php 
require_once("./connection/connection.php");

$query = "CREATE TABLE film_genres(
          film_id INT,
          genre_id INT,
          PRIMARY KEY (film_id, genre_id),
          FOREIGN KEY (film_id) REFERENCES films(id) ON DELETE CASCADE,
          FOREIGN KEY (genre_id) REFERENCES genres(id) ON DELETE CASCADE)";

$execute = $mysqli->query($query);

//php C:\xampp\htdocs\zino-cinema\server\migrations\004_create_film_genres_table.php
 