<?php
require_once("./connection/connection.php");

$query = "CREATE TABLE seats(
          id INT AUTO_INCREMENT PRIMARY KEY,
          auditorium_id INT NOT NULL fOREIGN KEY REFERENCES auditoriums(id) ON DELETE CASCADE,
          row INT NOT NULL,
          number INT NOT NULL,
          seat_type ENUM('regular', 'vip') NOT NULL DEFAULT 'regular',
          status ENUM('available', 'booked') NOT NULL DEFAULT 'available',
          "