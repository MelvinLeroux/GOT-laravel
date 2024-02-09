<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/app.css">
    <title>Game of Thrones</title>
</head>

<body>
    <header>
        <h1>
            @yield('page-title')
        </h1>
        <nav>
            <ul>
                <li><a href="{{ route('main.home') }}">Personnages</a></li>
                <li><a href="">Maisons</a></li>
            </ul>
        </nav>
        <div class="separator"></div>
    </header>
    <main>
        <div class="wrapper">
            @yield('page-content')
        </div>
    </main>

</body>

</html>
