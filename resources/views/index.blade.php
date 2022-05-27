<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/img/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

    <title>Home</title>
</head>

<body>
    <!-- NAVIGASI BAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent" id="mainNav">
        <div class="container">
            @include('partials.navbarbrand')
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @include('partials.nav')
        </div>
    </nav>
    <!-- AKHIR NAVIGASI BAR -->

    <!-- JUMBOTRON -->
    <div class="container">
        <div class="row">
            <div class="col-9">
                    <section class="jumbotron">
                        <h1 class="display-4">Bank Book</h1>
                        <h3 class="display-5">lets read a book</h3>
                        <p class="lead">"Membaca adalah nafas hidup dan jembatan emas ke masa depan."</p>
                        <div class="input-group">
                            <a href="/login"><button name="login" class="btn">Login</button></a>
                        </div>
                    </section>
            </div>
            <div class="d-none col-0 col-md-3 d-md-flex align-items-center justify-content-center">
                <img src="/img/2-books-png-image.png" alt="book-example" width="100%" height="60%">
            </div>
        </div>
    </div>
    <!-- AKHIR JUMBOTRON -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>