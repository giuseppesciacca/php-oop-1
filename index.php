<?php
include __DIR__ . '/Models/Movie.php';

/* 
Bonus 1:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.

Possiamo ad esempio organizzare il codice:
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
*/

$avatar = new Movie('Avatar', 'Jake Sully è un marine costretto su una sedia a rotelle che accetta di trasferirsi sul pianeta Pandora in sostituzione del fratello morto, la cui missione era quella di esplorare il pianeta. Essendo l\'atmosfera del pianeta tossica per gli umani sono stati creati degli esseri simili ai nativi Na\'vi che possono essere \'guidati\' dagli umani.', new Genre('Action'));

var_dump($avatar);
var_dump($avatar->get_genre());

$titanic = new Movie('Avatar', 'A Clerville c\'è attesa per l\'arrivo di Lady Kant, che porta con sé un diamante rosa. Il gioiello non sfugge all\'attenzione di Diabolik, che rimane incantato dalla donna. Ma l\'ispettore Ginko ha trovato il modo di intrappolare il criminale.', new Genre('Crime'));

var_dump($titanic);
