<?php 
    // Importo il database
    require "db/albums_db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Header -->
    <header class="p-3">
        <!-- Logo -->
        <img class="spotify-logo" src="img/logo-small.svg" alt="Logo Spotify">   
    </header>
    <!-- Main -->
    <main class="flex-grow-1">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="row row-cols-5 gx-5 gy-3">
                    <!-- Stampo una col per ogni album -->
                    <?php foreach($albums as $album) : ?>
                        <div>
                            <div class="album-card p-4 text-center h-100">
                                <!-- Logo album -->
                                <img class="w-100 mb-3" src="<?php echo $album["poster"] ?>" alt="<?php echo $album["title"] ?>">
                                <!-- Titolo album -->
                                <h4 class="text-white text-uppercase mb-3"><?php echo $album["title"] ?></h4>
                                <!-- Autore album -->
                                <div class="album-author"><?php echo $album["author"] ?></div>
                                <!-- Anno di rilascio -->
                                <span><?php echo $album["year"] ?></span>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>