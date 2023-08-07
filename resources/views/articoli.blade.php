<x-main>



<div class="mt-4">
    <div class="row">
    @foreach($articles as $article)
        <x-card :title="$article->title" :categori="$article->categori" :articleid="$article->id" />
    @endforeach
    </div>
</div>

</x-main>