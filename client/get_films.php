<?php
$films = [
    ["id" => 1 ,"title" => "F1", "image" => "../assets/brad pitt.jpg", "genre" => "Action", "video" => "https://www.youtube.com/watch?v=63AZ_Wa0oD0&t=9s"],
    ["id" => 2, "title" => "MEGAN 2.0", "image" => "../assets/megan 2.0.jpg", "genre" => "Action"],
    ["id" => 3, "title" => "RESTART", "image" => "../assets/restart.jpg", "genre" => "Comedy"],
    ["id" => 4, "title" => "FIGHT OR FLIGHT", "image" => "../assets/fight or flight.jpg", "genre" => "Action"],
    ["id" => 5, "title" => "HOW TO TRAIN YOUR DRAGON", "image" => "../assets/how to train your dragon.jpg", "genre" => "Action"],
    ["id" => 6, "title" => "MISSION IMPOSSIBLE", "image" => "../assets/mission imposible.jpg", "genre" => "Action"],
    ["id" => 7, "title" => "KARATE KID", "image" => "../assets/karate kid.jpg", "genre" => "Action"],
    ["id" => 8, "title" => "28 YEARS LATER", "image" => "../assets/28 years later.jpg", "genre" => "Horror"],
    ["id" => 9, "title" => "ELIO", "image" => "../assets/elio.jpg", "genre" => "Animation"],
    ["id" => 10, "title" => "STITCH", "image" => "../assets/film1.jpg", "genre" => "Family"],
];
echo json_encode($films);