<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Dischi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>
    <div id="app">
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
                        <div v-for="album in albumsList">
                            <div class="album-card p-4 text-center h-100">
                                <!-- Logo album -->
                                <img class="w-100 mb-3" :src="album.poster" :alt="album.title">
                                <!-- Titolo album -->
                                <h4 class="text-white text-uppercase mb-3">{{ album.title }}</h4>
                                <!-- Autore album -->
                                <div class="album-author">{{ album.author }}</div>
                                <!-- Anno di rilascio -->
                                <span>{{ album.year }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/app.js"></script>
</body>
</html>