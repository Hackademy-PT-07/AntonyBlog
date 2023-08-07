<x-main>
    <div class="container mt-5">

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <span>{{ $error }}</span><br>
                @endforeach
            </div>
        @endif

        <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" maxlength="150"
                            value="{{ old('title') }}">
                            @error('title') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <label for="categori">Categoria</label>
                    <input type="text" name="categori" id="categori" class="form-control"
                            value="{{ old('categori') }}">
                    @error('categori') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <label for="description">Descrizione breve</label>
                    <input type="text" name="description" id="description" class="form-control"
                            value="{{ old('description') }}">
                    @error('description') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <label for="image">Immagine</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="col-12">
                    <label for="body">Corpo</label>
                    <textarea name="body" id="body" rows="10" class="form-control">{{ old('body') }}</textarea>
                    @error('body') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <button class="btn btn-primary">Salva</button>
                </div>
            </div>
        </form>
    </div>    
</x-main>