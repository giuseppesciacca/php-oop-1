<?php
include __DIR__ . '/Models/Movie.php';

$avatar = new Movie('Avatar', 'Jake Sully è un marine costretto su una sedia a rotelle che accetta di trasferirsi sul pianeta Pandora in sostituzione del fratello morto, la cui missione era quella di esplorare il pianeta. Essendo l\'atmosfera del pianeta tossica per gli umani sono stati creati degli esseri simili ai nativi Na\'vi che possono essere \'guidati\' dagli umani.', 'https://image.tmdb.org/t/p/w342/b1UAG3QykMoLxwDgzk1LqsBkkG3.jpg', new Genre('Action'));

$diabolik = new Movie('Diabolik', 'A Clerville c\'è attesa per l\'arrivo di Lady Kant, che porta con sé un diamante rosa. Il gioiello non sfugge all\'attenzione di Diabolik, che rimane incantato dalla donna. Ma l\'ispettore Ginko ha trovato il modo di intrappolare il criminale.', 'https://image.tmdb.org/t/p/w342/ylvBK32qTiP9H07yssYR1zXSojq.jpg', new Genre('Crime'));

$matrix_resurrections = new Movie('Matrix Resurrections', 'Matrix is the title of a Canadian-produced fantasy/adventure series that ran for 13 episodes during 1993 on the USA Network in the United States. The series later enjoyed a brief revival of interest due to a coincidence involving one of its stars.', 'https://image.tmdb.org/t/p/w342/sZCT1D5yLNVHarTpv157FaLzPCc.jpg', new Genre(('Action')));

$spider_man = new Movie('Spider-Man', 'Peter Parker è il tipico adolescente sfigato, segretamente innamorato fin da bambino della sua vicina di casa Mary Jane, rimasto orfano dei genitori e che vive con gli zii. Durante una gita scolastica a un laboratorio scientifico Peter viene morso da un ragno geneticamente modificato.', 'https://image.tmdb.org/t/p/w342/gh4cZbhZxyTbgxQPxD0dOudNPTn.jpg', new Genre('Action'));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center pt-5">Movies</h1>
    <div class="container py-5">
        <div class="row">

            <div class="col d-flex justify-content-center">
                <div class="card" style="width:18rem;">

                    <img src="<?php echo $avatar->urlPath ?>" class="card-img-top" alt="<?php echo $avatar->title ?>">

                    <div class="card-body">
                        <h5 class="card-title"><?php echo $avatar->title ?></h5>
                        <p class="card-text"><?php echo $avatar->overview ?></p>
                        <p class="card-text"><?php echo 'Genre: ' . $avatar->genre->genre ?></p>
                    </div>
                </div>

            </div>

            <div class="col d-flex justify-content-center">
                <div class="card" style="width:18rem;">

                    <img src="<?php echo $diabolik->urlPath ?>" class="card-img-top" alt="<?php echo $diabolik->title ?>">

                    <div class="card-body">
                        <h5 class="card-title"><?php echo $diabolik->title ?></h5>
                        <p class="card-text"><?php echo $diabolik->overview ?></p>
                        <p class="card-text"><?php echo 'Genre: ' . $diabolik->genre->genre ?></p>

                    </div>
                </div>
            </div>

            <div class="col d-flex justify-content-center">
                <div class="card" style="width:18rem;">

                    <img src="<?php echo $matrix_resurrections->urlPath ?>" class="card-img-top" alt="<?php echo $matrix_resurrections->title ?>">

                    <div class="card-body">
                        <h5 class="card-title"><?php echo $matrix_resurrections->title ?></h5>
                        <p class="card-text"><?php echo $matrix_resurrections->overview ?></p>
                        <p class="card-text"><?php echo 'Genre: ' . $matrix_resurrections->genre->genre ?></p>

                    </div>
                </div>

            </div>

            <div class="col d-flex justify-content-center">
                <div class="card" style="width:18rem;">

                    <img src="<?php echo $spider_man->urlPath ?>" class="card-img-top" alt="<?php echo $spider_man->title ?>">

                    <div class="card-body">
                        <h5 class="card-title"><?php echo $spider_man->title ?></h5>
                        <p class="card-text"><?php echo $spider_man->overview ?></p>
                        <p class="card-text"><?php echo 'Genre: ' . $spider_man->genre->genre ?></p>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>