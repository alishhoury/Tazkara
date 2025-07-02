<?php
$films = [
    [
        "id" => 1,
        "title" => "F1",
        "image" => "./assets/brad pitt.jpg",
        "genre" => "Action",
        "video" => "https://www.youtube.com/watch?v=63AZ_Wa0oD0&t=9s",
        "description" => "A thrilling action film starring Brad Pitt.",
        "showtimes" => [
            ["time" => "10:00 AM", "location" => "Hall 1"],
            ["time" => "2:00 PM", "location" => "Hall 2"],
            ["time" => "6:00 PM", "location" => "Hall 1"]
        ]
    ],
    [
        "id" => 2,
        "title" => "MEGAN 2.0",
        "image" => "./assets/megan 2.0.jpg",
        "genre" => "Action",
        "video" => "https://www.youtube.com/watch?v=fPGfaQtEUII&t=4s",
        "description" => "Sequel to the hit action movie MEGAN.",
        "showtimes" => [
            ["time" => "11:00 AM", "location" => "Hall 3"],
            ["time" => "3:00 PM", "location" => "Hall 2"]
        ]
    ],
    [
        "id" => 3,
        "title" => "RESTART",
        "image" => "./assets/restart.jpg",
        "genre" => "Comedy",
        "video" => "https://youtu.be/pgq6tjnpMYs",
        "description" => "A hilarious comedy about second chances.",
        "showtimes" => [
            ["time" => "12:00 PM", "location" => "Hall 1"],
            ["time" => "4:00 PM", "location" => "Hall 3"]
        ]
    ],
    [
        "id" => 4,
        "title" => "FIGHT OR FLIGHT",
        "image" => "./assets/fight or flight.jpg",
        "genre" => "Action",
        "video" => "https://youtu.be/8GeppMljDps",
        "description" => "An adrenaline-pumping action adventure.",
        "showtimes" => [
            ["time" => "1:00 PM", "location" => "Hall 2"],
            ["time" => "5:00 PM", "location" => "Hall 1"]
        ]
    ],
    [
        "id" => 5,
        "title" => "HOW TO TRAIN YOUR DRAGON",
        "image" => "./assets/how to train your dragon.jpg",
        "genre" => "Action",
        "video" => "https://youtu.be/msqSXfbcrWQ",
        "description" => "A family-friendly action fantasy.",
        "showtimes" => [
            ["time" => "10:30 AM", "location" => "Hall 3"],
            ["time" => "2:30 PM", "location" => "Hall 2"]
        ]
    ],
    [
        "id" => 6,
        "title" => "MISSION IMPOSSIBLE",
        "image" => "./assets/mission imposible.jpg",
        "genre" => "Action",
        "video" => "https://youtu.be/VvZBNVOa4HE",
        "description" => "Tom Cruise returns in another impossible mission.",
        "showtimes" => [
            ["time" => "11:30 AM", "location" => "Hall 1"],
            ["time" => "3:30 PM", "location" => "Hall 3"]
        ]
    ],
    [
        "id" => 7,
        "title" => "KARATE KID",
        "image" => "./assets/karate kid.jpg",
        "genre" => "Action",
        "video" => "https://youtu.be/kyB67vx882s",
        "description" => "A classic martial arts coming-of-age story.",
        "showtimes" => [
            ["time" => "12:30 PM", "location" => "Hall 2"],
            ["time" => "4:30 PM", "location" => "Hall 1"]
        ]
    ],
    [
        "id" => 8,
        "title" => "28 YEARS LATER",
        "image" => "./assets/28 years later.jpg",
        "genre" => "Horror",
        "video" => "https://youtu.be/-UJqAKMpjy8",
        "description" => "A chilling horror sequel.",
        "showtimes" => [
            ["time" => "1:30 PM", "location" => "Hall 3"],
            ["time" => "5:30 PM", "location" => "Hall 2"]
        ]
    ],
    [
        "id" => 9,
        "title" => "ELIO",
        "image" => "./assets/elio.jpg",
        "genre" => "Animation",
        "video" => "https://youtu.be/96MXLGbazZU",
        "description" => "A heartwarming animated adventure.",
        "showtimes" => [
            ["time" => "10:15 AM", "location" => "Hall 1"],
            ["time" => "2:15 PM", "location" => "Hall 3"]
        ]
    ],
    [
        "id" => 10,
        "title" => "STITCH",
        "image" => "./assets/stitch.jpg",
        "genre" => "Family",
        "video" => "https://youtu.be/QoSYKJC1zTA",
        "description" => "A fun family film for all ages.",
        "showtimes" => [
            ["time" => "11:15 AM", "location" => "Hall 2"],
            ["time" => "3:15 PM", "location" => "Hall 1"]
        ]
    ]];

    echo json_encode($films);