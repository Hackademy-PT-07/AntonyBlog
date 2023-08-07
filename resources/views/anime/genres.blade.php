<x-main>
    <x-slot:title>Anime generi</x-slot>
    <div class="container mt-5">
        <h1>Anime generi</h1>
        <div class="mt-5">
            @foreach($genres as $genre)
            <a href="{{ route('anime.category', $genre['mal_id']) }}">{{ $genre['mal_id'] }} {{ $genre['name'] }} {{ $genre['count'] }}</a><br>
            @endforeach
        </div>
    </div>
</x-main>