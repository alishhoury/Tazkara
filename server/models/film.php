<?php
require_once("Model.php");
class Film extends Model {

    private int $id;
    private string  $title;
    private string  $description;
    private string  $age_rating;
    private string  $release_date;
    private string  $trailer_path;
    private string  $poster_path;
    private string  $duration;
    
    protected static string $table = "films";
    protected static string $primaryKey = "id";

    public function __construct(array $data) {
        $this->id = $data["id"];
        $this->title = $data["title"];
        $this->description = $data["description"];
        $this->age_rating = $data["age_rating"];
        $this->release_date = $data["release_date"];
        $this->trailer_path = $data["trailer_path"];
        $this->poster_path = $data["poster_path"];
        $this->duration = $data["duration"];
    }


     public function getId(): int {
        return $this->id;
    }
      public function getTitle(): string {
        return $this->title;
    }
    public function getRating(): ?string {
        return $this->age_rating;
    }
    public function getDuration(): ?int {
        return $this->duration;
    }
    public function getTrailerUrl(): ?string {
        return $this->trailer_path;
    }
    public function getPosterImage(): ?string {
        return $this->poster_path;
    }
    public function getAgeRestriction(): ?int {
        return $this->age_rating;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getReleaseDate(): string {
        return $this->release_date;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }
    public function setDescription(string $description) {
        $this->description = $description;
    }
    public function setReleaseDate(string $release_date) {
        $this->release_date = $release_date;
    }
    public function setRating(string $age_rating) {
        $this->age_rating = $age_rating;
    }
    public function setDuration(int $duration) {
        $this->duration = $duration;
    }
    public function setTrailerUrl(string $trailer_path) {
        $this->trailer_path = $trailer_path;
    }
    public function setPosterImage(string $poster_image) {
        $this->poster_path = $poster_path;
    }
    public function setAgeRestriction(?int $age_rating) {
        $this->age_rating = $age_rating;
    }

    public function toArray() {
        return [
            "id" =>   $this->id,
            "title"=> $this->title,
            "description"=>$this->description,
            "release_date"=> $this->release_date,
            "rating" => $this->age_rating,
            "duration" => $this->duration,
            "trailer_url" =>  $this->trailer_path,
            "poster_image"=>  $this->poster_path,
            "age_restriction" =>  $this->age_rating
        ];
}
}