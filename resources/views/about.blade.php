<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/img/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <title>About</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container-fluid">
                @include('partials.navbarbrand')
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @include('partials.nav')
            </div>
        </nav>
        <div class="row mt-5">
            <div class="col-12 col-md-5 d-flex justify-content-center align-self-center">
                <img src="/img/book-example.jpg" alt="book-example">
            </div>
            <div class="col-12 col-md-7 mt-5">
                <p class="text-justify">Bank Book merupakan website membaca buku seperti perpustakaan yang dimana user dapat menukar poin untuk
                    membaca buku dan mengunggah buku untuk mendapatkan poin yang dimana poin tersebut dapat kembali
                    digunakan
                    untuk membaca buku lain. User akan mendapatkan poin awal yang bisa ditukarkan dengan buku. User dapat
                    membaca buku dengan menggunakan beberapa poin. User juga dapat menggunggah sejumlah buku untuk
                    mendapatkan
                    poin yang nantinya akan ditukarkan kembali dengan buku lainnya. Jika poin di akun user dibawah angka
                    yang
                    ditentukan maka user tersebut tidak dapat melakukan peminjaman buku kepada Book Bank </p>
            </div>
        </div>
        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>