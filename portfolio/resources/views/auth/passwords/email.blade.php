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
<!-- End Head -->
<body>
<!-- Body -->
<div class="container-fluid">
    <!-- Form -->
    <div class="row justify-content-center">
        <div class="card-body vertical-center">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{route('password.email')}}" id="cardlogin" class="col-4 ">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p class="h5 text-center">Réinitialiser le mot de passe</p>

                <div class="md-form {{ $errors->has('email') ? ' has-error' : '' }}">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                    <label for="defaultForm-email">E-mail</label>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="text-center">
                    <button class="btn btn-custom">Envoyer le mot de passe</button>
                </div>

            </form>
        </div>
    </div>
    <!-- End Form -->

{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Réinitialiser le mot de passe</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
</div>
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