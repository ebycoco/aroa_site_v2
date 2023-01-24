<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mot de passe oublié</title>

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('acceuil') }}" class="h1"><b>Aroapartners</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Veuillez entrer votre email</p>

                <form action="{{ route('forgot.password.link') }}" method="POST" enctype="multipart/form-data">
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @csrf

                    <div class="input-group mb-3">

                        <input type="email" class="form-control" placeholder="Email" name="email"
                            value="{{ old('email') }}">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>

                    </div>
                    <div class="input-group mb-3 text-center">
                        <span class="text-danger alert-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
                        </div>
                    </div>

                </form>
                <div class="row mt-3">
                    <div class="col-12">
                        <a href="{{ url('/admin') }}" class="btn btn-danger btn-block">Login</a>
                    </div>
                </div>
                <!-- /.social-auth-links -->


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <link rel="stylesheet" href="{{ asset('public/js/app.js') }}">
</body>

</html>
