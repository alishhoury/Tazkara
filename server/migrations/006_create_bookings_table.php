<?php
require_once("./connection/connection.php");

$query = "CREATE TABLE bookings(
          id INT AUTO_INCREMENT PRIMARY KEY,
          user_id INT,
          show_time INT,
          number_of_seats INT,
          total_amount INT,
          payment_status ENUM('pending', 'completed', 'failed') NOT NULL DEFAULT 'pending',
            )";

$execute = $mysqli->query($query);