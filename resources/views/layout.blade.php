<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Polymorphic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <nav class="nav nav-pills">
                    <a @class([
                        'active' => request()->routeIs('posts.index'),
                        'nav-link' => true,
                    ]) aria-current="page" href="{{ route('posts.index') }}">Gönderiler</a>
                    <a @class([
                        'active' => request()->routeIs('posts.create'),
                        'nav-link' => true,
                    ]) href="{{ route('posts.create') }}">Gönderi Ekle</a>
                    <a @class([
                        'active' => false,
                        'nav-link' => true,
                    ]) href="#">Link</a>
                </nav>
            </div>
        </div>
        @yield('content')
    </div>
</body>

</html>
