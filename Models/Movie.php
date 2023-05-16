<?php

include __DIR__ . '/Genre.php';

class Movie
{
    public $title;
    public $overview;
    public $urlPath;
    public $genre;

    function __construct(string $title, string $overview, string $urlPath, Genre $genre)
    {
        $this->title = $title;
        $this->overview = $overview;
        $this->urlPath = $urlPath;
        $this->genre = $genre;
    }

    function get_genre()
    {
        return $this->genre;
    }
}
