<x-layout>
    <form action="{{ route('movies.store') }}" method="POST">
        <!-- CSRF token for security -->
        @csrf

        <h2>Add a New Movie</h2>

        <!-- ninja Name -->
        <label for="name">Movie Name:</label>
        <input type="text" id="name" name="name"value="{{ old('name') }}" required>

        <!-- Movie Strength -->
        <label for="Rating">Movie Rating (0-10):</label>
        <input type="number" id="rating" name="rating" value="{{ old('rating') }}" required>

        <!-- Movie Bio -->
        <label for="bio">Description:</label>
        <textarea rows="5" id="description" name="description" required>{{ old('description') }}</textarea>

        <!-- select a dojo -->
        <label for="dojo_id">Dojo:</label>
        <select id="dojo_id" name="dojo_id" required>
            <option value="" disabled selected>Select a dojo</option>
            @foreach ($dojos as $dojo)
                <option value="{{ $dojo->id }}" {{ old('dojo_id') == $dojo->id ? 'selected' : '' }}>
                    {{ $dojo->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Add Movie</button>

        <!-- validation errors -->
        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    
    </form>
</x-layout>