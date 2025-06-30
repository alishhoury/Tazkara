<?php
$films = [
    ["title" => "Film 1", "image" => "assets/film1.jpg", "description" => "In Karate Kid: Legends, after In Karate Kid: Legends,"],
    ["title" => "Film 2", "image" => "assets/film2.jpg", "description" => "Description for Film 2"],
    ["title" => "Film 3", "image" => "assets/film3.jpg", "description" => "Description for Film 3"]
];
echo json_encode($films);