<?php
$films = [
    ["title" => "F1", "image" => "assets/brad pitt.jpg", "description" => "Action"],
    ["title" => "MEGAN 2.0", "image" => "assets/megan 2.0.jpg", "description" => "Action"],
    ["title" => "RESTART", "image" => "assets/restart.jpg", "description" => "Comedy"],
    ["title" => "FIGHT OR FLIGHT", "image" => "assets/fight or flight.jpg", "description" => "Action"],
    ["title" => "HOW TO TRAIN YOUR DRAGON", "image" => "assets/how to train your dragon.jpg", "description" => "Action"],
    ["title" => "MISSION IMPOSSIBLE", "image" => "assets/mission imposible.jpg", "description" => "Action"],
    ["title" => "KARATE KID", "image" => "assets/karate kid.jpg", "description" => "Action"],
    ["title" => "28 YEARS LATER", "image" => "assets/28 years later.jpg", "description" => "Horror"],
    ["title" => "ELIO", "image" => "assets/elio.jpg", "description" => "Animation"],
    ["title" => "STITCH", "image" => "assets/film1.jpg", "description" => "Family"],
];
echo json_encode($films);