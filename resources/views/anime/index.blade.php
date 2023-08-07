<x-main>
    <x-slot:title>Anime category</x-slot>
    <div class="container mt-5">
        <h1>Anime category</h1>
        <div class="mt-5">
           <div class="row g-3">
           @foreach($anime as $animeitem)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                          <h5>{{ $animeitem['title'] }}</h5>

                          <div class="mt-2">
                            <img src="{{ $animeitem['images']['jpg']['image_url'] }}" alt="{{ $animeitem['title'] }}" class="img-fluid">
                          </div>

                          <div class="mt-2">Durata: {{ $animeitem['duration'] }}</div>

                          <div class="mt-2">Punteggio: {{ $animeitem['score'] }}/10</div>

                          <div class="mt-2">{{ $animeitem['synopsis'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
           </div>
        </div>
    </div>
</x-main>