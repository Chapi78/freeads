<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Accueil</h1>
    <h3><a href="{{ route('login') }}">login</a></h3>
    <h3><a href="{{ route('register') }}">register</a></h3>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </a>
    </form>
</body>
</html>
