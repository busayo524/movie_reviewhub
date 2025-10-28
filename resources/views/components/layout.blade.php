<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Review and Ranking Site</title>

    @vite('resources/css/app.css')
</head>
<body>
    @if (session('success'))
        <div id='flash' class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif
    
    <header>
        <h1>Movies Review and Ranking Site</h1>
        <nav>
            <a href="/">Home</a> |
            <a href="{{ route('movies.index') }}">All Movies</a>
            <a href="{{ route('movies.add') }}">Add New Movies</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>