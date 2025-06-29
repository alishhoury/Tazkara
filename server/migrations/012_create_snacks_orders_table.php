<?php

require_once("./connection/connection.php");

$query = "CREATE TABLE snacks_orders(
          id INT AUTO_INCREMENT PRIMARY KEY,
          booking_id INT NOT NULL,
          snack_id INT NOT NULL,
          quantity INT NOT NULL,
          audit_id INT NOT NULL,
          FOREIGN KEY (booking_id) REFERENCES bookings(id) ON DELETE CASCADE,
          FOREIGN KEY (snack_id) REFERENCES snacks(id) ON DELETE CASCADE,
          FOREIGN KEY (audit_id) REFERENCES auditoriums(id) ON DELETE CASCADE
        )";

$execute = $mysqli->query($query);