<?php
include_once __DIR__ . "/Genre.php";

class Movie
{
    public $title;
    public $genre;
    public $director;

    function __construct(String $title, genre $genre, String $director)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
    }

    public function getGenre()
    {
        return $this->genre;
    }
}
