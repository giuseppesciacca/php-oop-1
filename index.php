<?php
include __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <h1 class="text-center pt-5">Movies</h1>
    <div class="container py-5">
        <div class="row">

            <?php foreach ($movies as $key => $movie) : ?>

                <div class="col d-flex justify-content-center">
                    <div class="card" style="width:18rem;">

                        <img src="<?php echo $movie->urlPath ?>" class="card-img-top" alt="<?php echo $movie->title ?>">

                        <div class="card-body">
                            <h5 class="card-title"><?php echo $movie->title ?></h5>
                            <p class="card-text"><?php echo $movie->overview ?></p>

                            <p class="card-text">
                                Genre:
                            <ul>
                                <?php foreach ($movie->genre as $key => $genre) : ?>
                                    <?php if ($genre != null) : ?>
                                        <li>
                                            <?php echo $genre ?>
                                        </li>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>
        </div>
    </div>



    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>