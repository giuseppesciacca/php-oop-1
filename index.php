<?php

/* classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo */
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
class Genre
{
    public $genre;

    function __construct(string $genre)
    {
        $this->genre = $genre;
    }
}

$avatar = new Movie('Avatar', 'Jake Sully è un marine costretto su una sedia a rotelle che accetta di trasferirsi sul pianeta Pandora in sostituzione del fratello morto, la cui missione era quella di esplorare il pianeta. Essendo l\'atmosfera del pianeta tossica per gli umani sono stati creati degli esseri simili ai nativi Na\'vi che possono essere \'guidati\' dagli umani.', new Genre('Action'));

var_dump($avatar);
var_dump($avatar->get_genre());

$titanic = new Movie('Avatar', 'A Clerville c\'è attesa per l\'arrivo di Lady Kant, che porta con sé un diamante rosa. Il gioiello non sfugge all\'attenzione di Diabolik, che rimane incantato dalla donna. Ma l\'ispettore Ginko ha trovato il modo di intrappolare il criminale.', new Genre('Crime'));

var_dump($titanic);
