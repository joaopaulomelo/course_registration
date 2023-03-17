<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiocruz | Bem Vindo</title>
    <link href="{{ asset('site/bootstrap.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container">

        <h2 style="text-align: center;">Bem-Vindo!</h2>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        @if (Session::has('status'))
            <div id="msg-suc" class="alert alert-success">
                {{ Session::get('status') }}
            </div>
        @endif
    </div>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>

</html>
