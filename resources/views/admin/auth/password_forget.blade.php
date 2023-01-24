<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin login</title>

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
                
                <form action="{{ route('admin.password_email') }}" method="POST" enctype="multipart/form-data"> @csrf
                    {{-- {{ Session::get('errors') }} --}}
                    @include('admin.layouts.alerts')
                    <div class="input-group mb-3">
                        <span class="text-danger">@error('email')@enderror</span>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                        
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
                        </div>
                    </div>
                </form>
                <!-- /.social-auth-links -->


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <link rel="stylesheet" href="{{ asset('public/js/app.js') }}">
</body>

</html>
