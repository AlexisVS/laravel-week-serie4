@extends("template.index")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">Nom: </div>
            <div class="col-md-6">Quantité: </div>
        </div>
        @foreach ($fruits as $fruit)
            <div class="row {{ strlen($fruit->name) >= 5 ? 'bg-primary' : '' }}">
                <div class="col-md-6"><a href="/fruit/{{ $fruit->id }}">{{ $fruit->name }}</a></div>
                <div class="col-md-6">{{ $fruit->quantity }}</div>
            </div>
        @endforeach
    </div>
@endsection
