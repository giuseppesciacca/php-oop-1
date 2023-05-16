<?php

class Genre
{
    public $genre_1;
    public $genre_2;
    public $genre_3;

    function __construct(string $genre_1, string $genre_2 = null, string $genre_3 = null)
    {
        $this->genre_1 = $genre_1;
        $this->genre_2 = $genre_2;
        $this->genre_3 = $genre_3;
    }
}
