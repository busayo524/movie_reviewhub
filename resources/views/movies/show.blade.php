<x-layout>
    <h2>{{ $movie->name }}</h2>
    <div class="bg-grey-200 p-4 rounded-lg">
        <p><strong>Rating Score:</strong> {{ $movie->rating }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $movie->description }}</p>
    </div>

    {{-- dojo info --}}
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Dojo Information</h3>
        <p><strong>Dojo name:</strong> {{ $movie->dojo->name }}</p>
        <p><strong>Location:</strong> {{ $movie->dojo->location }}</p>
        <p><strong>About the Dojo:</strong></p>
        <p>{{ $movie->dojo->description }}</p>
    </div>

    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"
            onclick="return confirm('Are you sure you want to delete this movie?');">
            Delete Movie
        </button>

</x-layout>