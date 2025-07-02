<?php
require_once("./connection/connection.php");

$query = "CREATE TABLE booking_seats(
          id INT AUTO_INCREMENT PRIMARY KEY,
          booking_id INT NOT NULL,
          seat_id VARCHAR(10) NOT NULL,
          FOREIGN KEY (seat_id) REFERENCES seats(id) ON DELETE CASCADE,
          FOREIGN KEY (booking_id) REFERENCES bookings(id) ON DELETE CASCADE
          )";

$execute = $mysqli->query($query);