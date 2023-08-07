<x-main>
    <div class="container mt-5">

        <div class="mt-4">
            <div class="mb-3">
                <a href="{{ route('articles') }}">Indietro</a>
            </div>
            <span class="small text-secondary">{{ $article['categori'] }}</span>

            <h1 class="text-primary">{{ $article['title'] }}</h1>

            <div class="mt-4">
                {{ $article['description'] }}
            </div>
        </div>
    </div>
</x-main>