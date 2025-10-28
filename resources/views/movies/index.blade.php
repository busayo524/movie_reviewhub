<x-layout>
    <h2>Currently Available Movies</h2>

    <ul>
        @foreach($movies as $movie)
            <li>
                <x-card href="{{ route('movies.show', $movie->id) }}" :highlight="$movie['rating'] > 6.0">
                    <div>
                        <h3>{{ $movie->name }}</h3>
                        <p>{{ $movie->dojo->name }}</p>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $movies->links() }}
</x-layout>