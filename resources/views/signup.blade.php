<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/img/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <title>Signup</title>
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
        </nav>

        <div class="row mt-5">
            <div class="col-0 col-md-5 d-none d-md-flex flex-column justify-content-center align-items-center">
                <h1 class="display-4">Belum punya akun ?</h1>
                <br>
                <h3 class="display-5">Ayo daftar sekarang!</h3>
            </div>
            <div class="col-12 col-md-7">
                <div class="login">
                    <form action="{{route('psignup')}}" method="POST" class="login-email" autocomplete="off">
                        @csrf
                        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Daftar</p>
                        <div class="input-group">
                            <input type="text" placeholder="Nama Lengkap" name="fullname" value="{{ old('fullname') }}"
                                required>
                        </div>
                        @error('fullname')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group">
                            <input type="text" placeholder="Username" name="username" value="{{ old('username') }}" required>
                        </div>
                        @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group">
                            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                        </div>
                        @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group">
                            <input type="password" placeholder="Password" name="password" value=""
                                required>
                        </div>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group">
                            <input type="password" placeholder="Confirm Password" name="cpassword"
                                value="" required>    
                        </div>
                        @error('cpassword')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group">
                            <button name="submit" class="btn">Sign Up</button>
                        </div>
                        <p class="login-register-text">Udah punya akun? <a href="/login">Login</a></p>
                    </form>
                </div>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>

