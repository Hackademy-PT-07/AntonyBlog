<x-main>





<div class="row">
<div class="col-lg-6 mx-auto">
<h1>{{ $title }}</h1>
<div>{{ $text}}</div>

    @if(session()->has('success'))
    <div class="alert alert-success">{{ session('success')}}</div>
    @endif

    <form action="{{ route('contact.save') }}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <label for="name">Nome</label>
                <input type="text" id='name' name="name" class="form-control">
            </div>
            <div class="col-12">
                <label for="email">Email</label>
                <input type="email" id='email' name="email" class="form-control">
            </div>
            <div class="col-12">
                <label for="message">Messaggio</label>
                <textarea id='message' name="message" class="form-control" rows="5"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Invia</button>
            </div>
        </div>
    </form>
</div>
</div>

</x-main>
