<?php

include __DIR__ . '/Genre.php';

class Movie
{
    public $title;
    public $overview;
    public $genre;

    function __construct(string $title, string $overview, Genre $genre)
    {
        $this->title = $title;
        $this->overview = $overview;
        $this->genre = $genre;
    }

    function get_genre()
    {
        return $this->genre;
    }
}
