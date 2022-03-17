<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header class="py-3 bg-dark text-white">
        <div class="container">
            <h1 class="h3">{{config('app.name')}}</h1>
        </div>
    </header>
    <div class="container">

        <div class="row">
            <aside class="col-md-3">
                <h4>Navigation</h4>
                <nav>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="" class="nav-link">Dashboard</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Categories</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Products</a></li>
                    </ul>
                </nav>
            </aside>
            <main class="col-md-9">
                <div class="mb-4">
                    @if (session()->has('success'))
                    <div class="alert alert-success m-4">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    @if (session()->has('delete'))
                    <div class="alert alert-danger m-4">
                        {{ session()->get('delete') }}
                    </div>
                    @endif
                    <h2>
                        @yield('title', 'Default')
                    </h2>
                </div>
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>