<head>
    <title>Admin Lucie Combrisson</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../img/perso/favicon.ico">
    <!-- CSS Bootstrap & MD -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome/css/fontawesome-all.min.css')}}">
    <!-- MyCSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/adminstyle.css')}}">
</head>
<body>
<!-- End Head -->
<!-- Body -->
    <!-- Form login -->
    <div class="row justify-content-center">
        <div class="card-body vertical-center">
            <form method="POST" action="{{ route('login') }}" id="cardlogin" class="col-xs-11 col-sm-11 col-md-8 col-lg-4">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p class="h5 text-center">Connexion</p>

                    <div class="md-form {{ $errors->has('email') ? ' has-error' : '' }}">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                        <label for="defaultForm-email">E-mail</label>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                <div class="md-form {{ $errors->has('password') ? ' has-error' : '' }}">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" name="password" class="form-control" required>
                    <label for="defaultForm-pass">Mot de passe</label>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="checked" class="grey-text">
                        Se souvenir de moi
                    </label>
                </div>

                <div class="text-center">
                    <button class="btn btn-custom">Connexion</button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        <span class="grey-text">Mot de passe oublié ?</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
    <!-- Form login -->
<!-- End Body -->
</body>
<!-- Footer -->
<!-- End Footer -->

<!-- JS Bootstrap & MD -->
<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>

</html>

{{-- </div> --}}
{{-- @endsection --}}
