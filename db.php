<?php
include __DIR__ . './Models/Movie.php';

$movies = [
    "avatar" => new Movie('Avatar', 'Jake Sully è un marine costretto su una sedia a rotelle che accetta di trasferirsi sul pianeta Pandora in sostituzione del fratello morto, la cui missione era quella di esplorare il pianeta. Essendo l\'atmosfera del pianeta tossica per gli umani sono stati creati degli esseri simili ai nativi Na\'vi che possono essere \'guidati\' dagli umani.', 'https://image.tmdb.org/t/p/w342/b1UAG3QykMoLxwDgzk1LqsBkkG3.jpg', new Genre('Action')),

    "diabolik" => new Movie('Diabolik', 'A Clerville c\'è attesa per l\'arrivo di Lady Kant, che porta con sé un diamante rosa. Il gioiello non sfugge all\'attenzione di Diabolik, che rimane incantato dalla donna. Ma l\'ispettore Ginko ha trovato il modo di intrappolare il criminale.', 'https://image.tmdb.org/t/p/w342/ylvBK32qTiP9H07yssYR1zXSojq.jpg', new Genre('Crime')),

    "matrix_resurrections" => new Movie('Matrix Resurrections', 'Matrix is the title of a Canadian-produced fantasy/adventure series that ran for 13 episodes during 1993 on the USA Network in the United States. The series later enjoyed a brief revival of interest due to a coincidence involving one of its stars.', 'https://image.tmdb.org/t/p/w342/sZCT1D5yLNVHarTpv157FaLzPCc.jpg', new Genre(('Action'))),

    "spider_man" => new Movie('Spider-Man', 'Peter Parker è il tipico adolescente sfigato, segretamente innamorato fin da bambino della sua vicina di casa Mary Jane, rimasto orfano dei genitori e che vive con gli zii. Durante una gita scolastica a un laboratorio scientifico Peter viene morso da un ragno geneticamente modificato.', 'https://image.tmdb.org/t/p/w342/gh4cZbhZxyTbgxQPxD0dOudNPTn.jpg', new Genre('Action'))
];
